<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Adminer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Adminer::get();
        
        return view("admin.Adminer.index",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.adminer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
		//$db = new Adminer;
        //表单验证
        $this->validate($request, [
            'account' => 'required|max:16',
            'pass' => 'required|max:20|min:6',
        ]);
        
        //$db = new Adminer;
        /* $db->account=$request->account;
        $aa=$request->pass;
        $db->pass = md5($aa);
        $db->save(); */
        
        
        //获取指定的部分数据
        $data = $request->only("account","pass");
        $data['pass'] = md5($data['pass']);
        $data['addtime']=date("Y-m-d H:i:s",time());
        //$db = new Adminer;
      
        $aa =Adminer::insertGetID($data); 
        
        
      
		/* $InsertNotice ->account =$request->account;
		$InsertNotice ->pass = $request ->pass;
		$InsertNotice->addtime=date("Y-m-d H:i:s",time());
		$InsertNotice->save();
		 */
		return redirect("admin/adminer");
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
        $list = Adminer::where('id','=',$id)->first();
        return view("admin.adminer.edit",['list'=> $list]);
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
        //  $input = $request->only(['account','pass','status']);
          $adf = Adminer::find($id);
          $adf->account = $request->account;
          $aaaa = $request->pass;
          $adf->pass= md5($aaaa);
          $adf->status = $request->status;

          $adf->save();
        //$id = Adminer::where("id",$id)->update($input);
        
       /*  if($id>0){
            echo "修改成功!";
        }else{
            echo "失败!";
        } */
        return redirect("admin/adminer");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db =new Adminer;
        Adminer::where('id','=',$id)->delete();
        //$db->delete($id);
        return redirect("admin/adminer");

    }
}
