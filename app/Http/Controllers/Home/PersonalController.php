<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Userinfo;
use App\Model\User;
use App\Http\Requests;
use DB;



class PersonalController extends Controller
{

    public function index()
	{
        //return 1;
		//用session获取当前登录用户的ID
	    
        $id = session("homeuser")->id;
        //dd($id);  
        $list = Userinfo::where("userid",$id)->first();
         //echo "<pre>";
         //print_r($list);
         //dump($list);
        //dump($list);
        return view("home.personal.index",['list'=>$list]);
        //return view('home.personal.index',compact('id'));
	}


	 public function create($id)
    {

        

    }

    
    public function store(Request $request)
    {

        
    }

    
    public function show($id)
    {
        //
    }


    
    public function edit($id)
    {
        //加载修改页面
        //

        //$list = Userinfo::where('userid',$id)->first();
        
        //return view("home.personal.index",['list'=>$list]);

    }

   
    public function update(Request $request, $id)

    {   

        //echo 'aaaa';
        //var_dump($_REQUEST);    
        //执行修改，
        $data = $request->only("account","email","age","sex");
        
         //dd($data);
        $id = \DB::table("userinfo")->where("userid",$id)->update($data);
        if($id>0){
            return redirect('home/personal');
        }
        //else{
            //return back()->with("err","修改失败!");
        //}

    }

    
    public function destroy($id)
    {
        //
    }


	
}
