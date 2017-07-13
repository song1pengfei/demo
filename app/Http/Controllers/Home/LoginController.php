<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Adminer;
class LoginController extends Controller
{

    /* public function login()
    {
        return view("home.login");
    } */


   



    public function login(Request $request)
    {
        return view("home.login");
         if(!$request->session()->has('homeuser')){
            return view("home.login");
            return redirect('/login');
        }else{
            $request->session()->forget('homeuser');
            return redirect('/login');
        } 
		
    } 

        //执行用户登录
   public function doLogin(Request $request)
   {
       /*  //执行验证码判断
        $mycode = $request->input("mycode");
        $yanzhengma = $request->session()->get('phrase');
        if($mycode !== $yanzhengma){
            return back()->with("msg","验证码错误！".$mycode.":".$yanzhengma);
        } */
        
        //执行登陆判断
        $account = $request->input("account");
        $password = $request->input("pass");
        //获取对应用户信息
        $user = User::where("account",$account)->first();

        //dd($user);
        //$arr = $this->ob($user[0]);   
        //$pas=$arr['password'];

        if(!empty($user)){
            //判断密码
            if($user['pass'] = md5($password)){
                //存储session跳转页面

                session()->put("homeuser",$user);

                //session()->put("User",$user);


                return redirect("home");
               //echo "测试成功!";
            }
        }

        return back()->with("msg","账号或密码错误！");
       

   }

  /*  //加载验证码
   public function getCode()
   {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        \Session::put('phrase',$builder->getPhrase()); //存储验证码
        return response($builder->output())->header('Content-type','image/jpeg');
   }
 */
   //执行退出
   public function logout(Request $request)
   {
       
      // var_dump(session('User'));
       
       $request->session()->forget('homeuser');
       
       //var_dump(session('User'));
       return redirect("home");
   }
    
}
