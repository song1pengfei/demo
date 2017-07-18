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


    }


    public function update(Request $request, $id)

    {   
        $id = session("homeuser")->id;

        //echo 'aaaa';
        //var_dump($_REQUEST);    
        //执行修改，
        $data = $request->only("account","email","age","sex");

        $date = $request->only("account","phone");
		//图片上传至七牛云
        if($request->hasfile('pic')){
            
            $file=$request->file('pic');
            $disk = QiniuStorage::disk('qiniu');
            $fileName=md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
            $bool=$disk->put('iwanli/image_'.$fileName,file_get_contents($file->getRealPath()));
            $data['pic'] = $fileName;
        }else{
            $ufirst = \DB::table('userinfo')->where('userid',$id)->first();
            $data['pic'] = $ufirst->pic;
        }
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
