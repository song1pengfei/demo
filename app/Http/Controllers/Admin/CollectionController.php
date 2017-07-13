<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Collection;
use App\Model\Discusstab;
use App\Model\userinfo;
class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$db = \DB::table("collection");
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['userid'])){
           $db->where("userid","like","%{$_GET['userid']}%");
           $params['userid'] = $_GET['userid']; //维持搜索条件
       }   
       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(5); //5条每页浏览
	   
	  /*  $d = \DB::table("userinfo")->get(['uname']);
	  $d == $list['userid'] */;
	   
	  
       return view("admin.Collection.index",['list'=>$list,'params'=>$params]);
	   
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
        
		$list = Collection::where("id",$id)->first();
        return view("admin.collection.edit",["list"=>$list]);
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
		$this->validate($request, [
            'userid' => 'required|max:16',
           
        ]);
        $data = $request->only("userid","content");
        
        $id = \DB::table("collection")->where("id",$id)->update($data);
        
        if($id>0){
            return redirect('admin/collection');
        }else{
            return back()->with("err","修改失败!");
        }
         
     
	 }
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
	{
      //\DB::delete('delete from collection where id = ?',[$id]);
	   //DB::delete('delete from student where id = ?',[$id]);
	   Collection::where('id',$id)->delete();	 
       return redirect('admin/collection');
   }
}

 