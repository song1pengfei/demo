<?php

namespace App\Http\Controllers\Home;
use App\Model\Article;
use App\Model\contents;
use App\Model\discusstab;

use App\Model\Redirect;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//$ss = 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		 //return view("admin.stu.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
	
    }
	
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
	{
		//echo "111";

		//$art = Article::where("userid","=",$id)->get();
		
		$art = Article::where("userid","=",$id)->get();
		

		$ar = contents::where("userid","=",$id)->get();	
		$list = discusstab::where('status', 2)->get();
		return view("home.details.index",['art'=>$art,'ar'=>$ar,'list'=>$list]);	
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
			//$list = discusstab::where('id',$id)->first(); //获取信息
			
			//return view("admin.discusstab.edit",["list"=>$list]);
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
