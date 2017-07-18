<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Adminer;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
   //加载登录模板
   public function login()
   {
       return view("admin.login");
   }
   
    //执行用户登录
   public function doLogin(Request $request)
   {
        //执行验证码判断
        $mycode = $request->input("mycode");
        $yanzhengma = $request->session()->get('phrase');
        if($mycode !== $yanzhengma){
            return back()->with("msg","验证码错误！".$mycode.":".$yanzhengma);
        }
        
        //执行登陆判断
        $account = $request->input("account");
        $password = $request->input("pass");
        //获取对应用户信息
        $user = Adminer::where("account",$account)->first();
        if(!empty($user)){
            //判断密码
            if($user['pass'] = md5($password)){
                //存储session跳转页面
                session()->put("adminer",$user);

                return redirect("admin");
               //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
       
   }
   

   public function getCode()
   {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        \Session::put('phrase',$builder->getPhrase()); //存储验证码
        return response($builder->output())->header('Content-type','image/jpeg');
   }
 
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('admin');
       return redirect("admin/login");
   }
}



