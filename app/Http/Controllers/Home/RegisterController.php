<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Userinfo;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    
    public function index()
    {
        //加载注册视图
		return view("home.register");
    }

    

    public function store(Request $request)
    {
        
	
        //获取要添加的数据
        
        $data = $request->only("phone","password","account");
        $data['password'] = md5($data['password']);
        $data['enrolltime']=date("Y-m-d H:i:s",time());
        
        $id = User::insertGetId($data);
        //return($id);
        
        //同时添加数据到userinfo表中 并且 userinfo表中的userid = user表中的主键id;
        
        $data['userid']=$id;
        
        $dd = Userinfo::insertGetID($data);
        
        if($id>0){
            echo  $info = "注册成功！";
        
        }else{
            echo  $info = "注册失败！";

        }
        return redirect('/home/login'); 
    }


}
