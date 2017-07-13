<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Contents;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $db = \DB::table("Article");
       
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['author'])){
           $db->where("author","like","%{$_GET['author']}%");
           $params['author'] = $_GET['author']; //维持搜索条件
       }

       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(5); //5条每页浏览

        return view("admin.Article.index",['list'=>$list,'params'=>$params]);
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
        $list = Contents::where('id',$id)->find($id); //获取信息
       // return $list;
        
        return view("admin.Contents.index",["list"=>$list]);
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
        //return $id;die;
          $data = Article::where('cid',$id)->get(); //获取信息
          //获取状态
          $data = $request->only("status");
          //dd($data);  die;
          //$data = $request->status;
          //echo json_encode($data);die;
          $article = new Article;
          $article->where("cid",$id)->update($data);
            return redirect('admin/article');
          //return redirect("admin/article");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $del = Article::find($id);
        $del->delete($id); 
        return redirect('admin/article');
    }
}
