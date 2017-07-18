<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Userinfo;

class UserinfoController extends Controller
{
    //后台userinfo首页 
    public function index()
    {
       
       $list = Userinfo::all();

       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['id'])){
           $db->where("id","like","%{$_GET['id']}%");
           $params['id'] = $_GET['id']; //维持搜索条件
       }
       
       $list = Userinfo::paginate(10); 
       return view("admin.userinfo.index",['list'=>$list]);
    }
}
