<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Userinfo;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;

class RegisterController extends Controller
{
    public function __construct(Sms $sms)
    {
       $this->sms=$sms;
    }
	 public function Alidayu(Request $request)
	 {
		$phone = $request ->input('phone'); // 用户手机号，接收验证码
		$dd = User::where('phone',$phone)->get()->toArray();
		//var_dump($dd);die();
		if(count($dd)>0){
			return 1;
			
		}else{
			$name = '兄弟连';  // 短信签名,可以在阿里大鱼的管理中心看到
			$num = rand(100000, 999999); // 生成随机验证码
			$smsParams = [
				'number' => "$num"
			];
			$content = json_encode($smsParams); // 转换成json格式的
			$code = "SMS_75835101";   // 阿里大于(鱼)短信模板ID
			$request ->session()->put('alidayu',$num);  // 存入session 后面做数据验证
		 
			$result=$this->sms->send($phone,$name,$content,$code);
			
			echo "验证码：".session('alidayu').'<br/>';
			if(property_exists($request,'result')){
			   // 使用PHP函数json_encode方法将给定数组转化为JSON：
				return json_encode(['ResultData' => '成功', 'info' => '已发送']);
			}else{
				return json_encode(['ResultData' => '失败', 'info' => '重复发送']);
			}	
		}
		
	 }
     public function index()
    {
        //加载注册视图
		return view("home.register");
    }

    
    public function store(Request $request)
    {
		//判断用户名开始
        //获取用户名
        $account = $request->input("account");
        $yong = \DB::table('user')->where("account","=",$account)->first();
        if($yong){
            //用户名存在
            return 1;
        }
    
        //获取手机名
        $phone = $request->input("phone");
        $info = \DB::table('user')->where("phone","=",$phone)->first();
        if($info){
            //用户名存在
            return 1;
			
        }
			//判断手机是否合法
            $info = preg_match("/^1[34578]\d{9}&/",$phone);
            if(!empty($info)){
                return back()->with("msg","手机不合法");
            }
            //判断密码是否合法
            $password = $request->input('password');
            $pass = preg_match("/^\w_{6,20}$/",$password);
            if(!empty($pass)){
                return back()->with("msg","密码不合法");
            }

		
		
        //获取要添加的数据
        $data = $request->only("phone","password","account");
        $data['password'] = md5($data['password']);
        $data['enrolltime']=date("Y-m-d H:i:s",time());
        
        $id = User::insertGetId($data);
        
        //同时添加数据到userinfo表中 并且 userinfo表中的userid = user表中的主键id;
        
        $data['userid']=$id;
        
        $dd = Userinfo::insertGetID($data);
        
        if($id>0){
            echo  $info = "注册成功！";
        
        }else{
            echo  $info = "注册失败！";

        }
        return redirect('/home/login'); 
		 //获取键
        //$phone = $request ->input('phone');
		//获取指定键的值
		//用户信息
		//$list =\DB::table('user')->where('phone',$inf['phone'])->first();
		//获取session 中的短信验证码
        $mescode = session('alidayu');
		
		//对比用户输入的验证码与session存储的验证码
        if ($request->input('$num') == $mescode){
             return redirect('/home/login');
        } else {
            //echo "code_error";
			//return redirect()->back()->withInput()->withErrors('保存失败！');
			return redirect('/home/register');
        }

    } 
	
}
