<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Contents;

use App\Model\Userinfo;


class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $art = Article::get()->where('status',1);
		$list = Contents::all();
        return view("home.list.index",['art'=>$art,'list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view("home.list.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       //获取传过来的字段信息
        $info = $request->only('title','author','content');
        //print_r($info);die();
        //将内容插入contents表并获取自增id号 
        $id = \DB::table("contents")->insertGetId($info);
        //var_dump($list);die();
        //print_r($id);die;
        // 实例化表并将字段信息插入$info2;
        $data = new Article;
        $info2 = $request->only('title','author');
        $info2['cid'] = $id;
        //print_r($info2);die;
        //$info4 = $request->only('author');
        //\DB::table("article")->insertGetId($info2);
        //添加到Article中
         $data->insert($info2);
        
        return view("home.detail.store");

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
        //
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
        //
    }
}
