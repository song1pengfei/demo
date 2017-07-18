<?php

namespace App\Http\Controllers\Home;
use App\Model\Article;
use App\Model\Userinfo;
use Illuminate\Http\Request;
use App\Model\discusstab;
use App\Http\Controllers\Controller;
use App\Model\contents;
//use App\Http\Controllers\Home\userinfo;
class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
		//$art = Article::where('status', 1)->get();
        $art = Article::where('status', 1)->orderBy("id",'desc')->paginate(2);
		 //$art = Article::where('status', 1)->get();
        //dd($art);
        foreach($art as $k=>$v){
            $art[$k]->content = Contents::where("id",$v->cid)->first()->content;
        }
		
		
		//$list = \DB::table('contents')->select("content")->get();
		
		 return view("home.index",['art'=>$art]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		
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
