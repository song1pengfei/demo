<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Userinfo;
use App\Model\User;
use App\Http\Requests;
use DB;
use zgldh\QiniuStorage\QiniuStorage;


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

        /*$InsertUserinfo = new Userinfo;
        //判断是否有文件上传
        if($request->hasFile('file')){
            //获取文件，file对应的是前端表单上传input的name
            $file = $request->file('pic');

            //初始化
            $disk = QiniuStorage::disk('qiniu');
            //重命名文件
            $fileName = md5($file->getClientOriginlName().time().rand()).'.'.$file->getClientOriginalExtension();
            //上传到七牛
             $bool=$disk->put('iwanli/image_'.$fileName,file_get_contents($file->getRealPath()));
             //判断是否上传成功
             if($bool){
                //获取存储路径
                $path = $disk->downloadUrl('iwanli/image_'.$fileName);
                //插入数据库
                $InsertUserinfo->pic=$fileName;
                 return redirect("home/personal");
               // return '上传成功，图片url:'.$path;
             }else{
                return redirect('home/personal')->with('status', '请选择上传文件!');
             }
            // return '上传失败';
        }*/

        $InsertUser=new userinfo;
        $InsertUser ->userid=$request->userid;
        $InsertUser ->account= $request ->account;
        $InsertUser ->sex =$request->sex;
         if ($request->file('pic') && $request->file('pic')->isValid()) {
            //获取上传文件信息
            $file = $request->file('pic');
            $ext = $file->extension(); //获取文件的扩展名
            //随机一个新的文件名
            $filename = time().rand(1000,9999).".".$ext;
            //移动上传文件
            $file->move("./UserinfoUpload/",$filename);
        }else{
            //闪存信息
            return redirect('home/personal')->with('status', '请选择上传文件!');
        }
        $InsertUser ->pic =$filename;
        //$InsertUser ->user_address =$request->user_address;
        //$InsertUser ->user_age =$request->user_age;
        $InsertUser->save();
        return redirect("home/persoanl");
    }


    public function update(Request $request, $id)

    {   
        $id = session("homeuser")->id;
        //echo 'aaaa';
        //var_dump($_REQUEST);    
        //执行修改，
        $data = $request->only("account","email","age","sex");
        $date = $request->only("account","phone");
         //dd($data);
        $aa = \DB::table("userinfo")->where("userid",$id)->update($data);
        $dd = \DB::table("user")->where("id",$id)->update($date);
        //dd($dd);
        if($aa>0){
            return redirect('home/personal');
        }
        else{
            return back()->with("err","修改失败!");
        }

    }

    
    public function destroy($id)
    {
        //
    }


	
}
