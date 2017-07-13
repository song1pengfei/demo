<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contents;
use App\Model\Article;
use App\Model\User;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //获取Article的数据
        $res = Article::orderBy("id",'desc')->paginate(15); //15条每页浏览
        //返回试图并遍历数据
        return view("home.detail.index",['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("home.detail.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($id);
        
        
        
		
        //获取传过来的字段信息
        $info = $request->only('userid','title','author','content');
		//获取得到session里储存的登录信息
		$inf = $request->session()->get("homeuser");
		//$list = user::where("account",$info)->first();
        $list =\DB::table('user')->where('account',$inf['account'])->first();
		//echo "<pre>"; var_dump($list); die();
        //将session里获取的id赋给传过来的userid;
        $info['userid'] = $list->id;
        //向contents表里添加数据并获取表的id
        $id = \DB::table("contents")->insertGetId($info);
        //实例Article表
        $data = new Article;
        //获取传过来的标题，作者字段
        $info2 = $request->only('title','author');
        //让contents的id等于$info2里的 cid,字段，userid字段等于session里的id字段
        $info2['cid'] = $id;
        $info2['userid'] =$list->id;
        //$info2的数据添加到 Article
        $data->insert($info2);
        //返回视图
       // home/detail
          return redirect('home/detail');
        //return view("home.detail.store");
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

        //return $id;
        //获取要修改的单条信息
        $list = Contents::where('id',$id)->find($id); //获取信息
        //返回视图界面并遍历数据
        return view("home.detail.edit",["list"=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dump( $id) ;die; 
        //获取传递过来的字段信息
        $input = $request->only('title','author','content');
        //把字段里的信息塞入Contents内容表
        $data =Contents::where('id',$id)->update($input);
        //获取传递过来的字段信息
        $info = $request->only('title','author');
        //修改Article表里的字段内容
        $content = Article::where('cid',$id)->update($info);
        //重定向界面
        return redirect('home/detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //print_r($id);
        //获取传过来的$id等于Article里的cid然后执行删除
        Article::where('cid',$id)->delete();
        //获取传过来的$id等于Contents里的id执行删除
        Contents::where('id',$id)->delete();
        //重定向至视图
        return redirect('home/detail');
    }
    //作为已通过文章
    public function through()
    {

        //echo 'aaaaa';
        $list =  Article::where('status',1)->get();
        //加载已通过文章页面
        return view('home.detail.through',['list'=>$list]);
    }

    public function nothrough()
    {   

        $list = Article::where('status',2)->get();
        //加载未通过文章页面
        return view('home.detail.nothrough',['list'=>$list]);
    }

    public function daithrough()
    {   
        
        $list = Article::where('status',3)->get();
        return view('home.detail.daithrough',['list'=>$list]);
    }
}
