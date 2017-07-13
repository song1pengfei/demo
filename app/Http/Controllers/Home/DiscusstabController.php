<?php

namespace App\Http\Controllers\Home;
use App\Model\Article;
use App\Model\contents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\discusstab;

class DiscusstabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $db = new Discusstab;        
		//$art = article::find(1);
       //获取要添加的数据   
        $data = $request->only("content","articleid","disTime");
        $data["status"]=1;
		$id = $db->insertGetId($data);
		//return $data;
        //判断
         if($id>0){
			return response()->json(['name' => '评论添加成功！待审核']);
        }else{
			return response()->json(['name' => '数据添加失败']);
        } 
		//return redirect("home/"); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
