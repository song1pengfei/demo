<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Articletype;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticletypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$list = Articletype::get();

        $db = new Articletype;
        $list = \DB::select("select * from Articletype order by concat(path,id) asc");

        //处理信息
        foreach($list as &$v){
            $m = substr_count($v->path,","); //获取path中的逗号
            //生成缩进
            $v->name = str_repeat("&nbsp;",($m-1)*8)."|--".$v->name;
        }
        return view("admin.Articletype.index",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = \DB::select("select * from Articletype order by concat(path,id) asc");

        //处理信息
        foreach($list as &$v){
            $m = substr_count($v->path,","); //获取path中的逗号
            //生成缩进
            $v->name = str_repeat("&nbsp;",($m-1)*8)."|--".$v->name;
        }
        return view("admin.Articletype.create",['list'=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new Articletype;
       //获取要添加的数据
        $data = $request->only("name",'pid');
        $pid = $data['pid'];
        if($pid==0){
            $data['path']="0,";
        }else{
            $type=$db->where("id",$pid)->first();
            $data['path'] = $type->path.$pid.",";
        }
        
        //执行添加
        $id = $db->insertGetId($data);
        //判断
        if($id>0){
            $info = "类别信息添加成功！";
        }else{
            $info = "类别信息添加失败！";
        }
        return redirect("admin/articletype");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list=Articletype::where('id',$id)->first();
        return view("admin.articletype.edit",['list'=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //先判断当前类别下是否存在子类别
        $m =Articletype::where('pid',$id)->count();
        if($m>0){
            return back()->with("err","禁止删除");
        }  
        Articletype::where('id','=',$id)->delete();
        //$db->delete($id);
        return redirect("admin/articletype");
    }
}
