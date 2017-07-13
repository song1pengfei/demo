<!DOCTYPE html>
<!-- saved from url=(0063)https://account.cnblogs.com/?ReturnUrl=https://www.cnblogs.com/ -->
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>用户注册 - 博客园</title>
    <!--优先加载字体-->
    <script src="{{url('js/nav-iconfont.js')}}"></script>
    <!--css-->
    <link rel="shortcut icon" href="https://common.cnblogs.com/favicon.ico" type="image/x-icon">
    <link href="{{url('css/layout.min.css')}}" rel="stylesheet">
    
    <link href="{{url('css/signup.min.css')}}" rel="stylesheet">

<style type="text/css"></style><script charset="UTF-8" async="" src="{{url('css/gettype.php')}}"></script><script charset="UTF-8" async="" src="{{url('js/geetest.5.10.10.js')}}"></script><script charset="UTF-8" src="{{url('css/get.php')}}"></script><link rel="stylesheet" href="{{url('css/style_https.3.2.0.css')}}"></head>
<link href="{{url('css/style.css')}}" rel="stylesheet">
<body>
    <nav class="navbar-fixed-top nav-box navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://cnblogs.com/" class="no-style">
                    <svg class="icon-logo">
                        <use xlink:href="#icon-logo"></use>
                    </svg>
                    <svg class="icon-txt-logo">
                        <use xlink:href="#icon-txt-logo"></use>
                    </svg>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-main-icon">
                    <li>
                        <a href="https://cnblogs.com/" class="no-style">
                            <svg class="icon-home">
                                <use xlink:href="#icon-home"></use>
                            </svg>
                            首 页
                        </a>
                    </li>
                        <li>
                            <a href="https://account.cnblogs.com/signin?returnUrl=%2F">
                                <svg>
                                    <use xlink:href="#icon-signin"></use>
                                </svg>
                                登 录
                            </a>
                        </li>
                    <li>
                        <a href="https://account.cnblogs.com/signup" id="signUpMenu">
                            <svg>
                                <use xlink:href="#icon-signup"></use>
                            </svg>
                            注 册
                        </a>
                    </li>
                    <li>
                        <a href="https://account.cnblogs.com/assist#" id="assistMenu">
                            <svg>
                                <use xlink:href="#icon-assist"></use>
                            </svg>
                            帮 助
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!---body-->
    <div class="container body-box" style="height: 564px;">
        <!--css-->
<div class="center-block body-content">
    <!--头部提示-->
    <div class="hidden-xs title-top col-sm-12">
        注册新用户
        <hr class="head-hr">
    </div>
    <!--表单-->
    <form class="form-horizontal col-sm-8 form-padding" role="form" id="registerForm" method="post" action="{{url('home/register')}}" novalidate="novalidate">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
        <div class="form-space-top hidden-xs"></div>
        <!--每一行--> 
		<div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="account">登录账号</label>
            </div>
            <div class="col-sm-10 has-feedback has-error">
                <input class="form-control input-validation-error" placeholder="登录账号" type="text" data-val="true" data-val-length="登录账号" name="account" value="" >   
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="PhoneNum">手机号码</label>
            </div>
            <div class="col-sm-10 has-feedback has-error">
                <input class="form-control input-validation-error" placeholder="激活帐户需要手机短信验证" type="text" data-val="true" data-val-length="请输入11位手机号码" data-val-length-max="11" data-val-length-min="11" data-val-regex="输入的手机号码有误" data-val-regex-pattern="^1[34578]\d{9}$" data-val-remote="&#39;手机号码&#39; is invalid." data-val-remote-additionalfields="phone" data-val-remote-url="/Account/CheckPhoneNum" data-val-required="请输入手机号码!" id="PhoneNum" name="phone" value="" aria-required="true" aria-invalid="true" aria-describedby="PhoneNum-error">   
            </div>
        </div>
		 <div class="form-group">
           <div class="col-sm-5 control-label"></div>
            <div class="col-sm-7 has-feedback has-error">
				
                <input class="form-control input-validation-error" placeholder="获取手机短信验证码" type="text" data-val="true" data-val-length="请输入手机短信验证码" data-val-length-max="11" data-val-length-min="11" data-val-regex="验证码有误"  name="" value=""  style="width:69%;float:left">
				<button >获取验证码</button>
				
            </div>
			 
        </div>
        <div class="space-line-height hidden-xs"></div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-2" for="Password">密码</label>
            </div>
            <div class="col-sm-10 has-feedback has-error">
                <input class="form-control input-validation-error" placeholder="至少8位，必须包含字母、数字、特殊字符" type="password" data-val="true" data-val-length="不合要求，密码长度要求8-30位!" data-val-length-max="30" data-val-length-min="8" data-val-nospace="密码不能包含空格!" data-val-regex="密码必须包含字母、数字和特殊字符的组合!" data-val-regex-pattern="^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).+$" data-val-required="请输入密码!" id="Password" name="password" aria-required="true" aria-invalid="true" aria-describedby="Password-error">    
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="ConfirmPassword">确认密码</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control valid" placeholder="请输入确认密码" type="password" data-val="true" data-val-equalto="确认密码错误!" data-val-equalto-other="*.Password" id="ConfirmPassword" name="password" aria-invalid="false" aria-describedby="ConfirmPassword-error">
                <span class="text-danger field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="checkWay" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content center-block">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">
                    请完成注册所需验证
                </h4>
            </div>
            <div class="modal-body">
                <div id="showLoading" class="ladda-button" data-style="zoom-in"></div>
                <div id="captchaBox" class="center-block"><div id="geetest_1499079916435" class="gt_holder gt_embed" style="touch-action: none;"><div class="gt_widget"><div class="gt_holder_top"></div><div class="gt_box_holder" style="height: 116px;"><div class="gt_box"><div class="gt_loading"><div class="gt_loading_icon"></div><div class="gt_loading_text">加载中...</div></div><a class="gt_bg gt_show" style="background-image: none;"><div class="gt_cut_bg gt_show"><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -157px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -145px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -265px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -277px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -181px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -169px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -241px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -253px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -109px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -97px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -289px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -301px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -85px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -73px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -25px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -37px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -13px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -1px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -121px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -133px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -61px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -49px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -217px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -229px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -205px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -193px -58px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -145px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -157px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -277px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -265px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -169px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -181px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -253px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -241px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -97px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -109px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -301px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -289px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -73px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -85px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -37px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -25px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -1px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -13px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -133px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -121px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -49px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -61px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -229px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -217px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -193px 0px;"></div><div class="gt_cut_bg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/bg/f4009edfc.webp&quot;); background-position: -205px 0px;"></div></div><div class="gt_slice gt_show" style="left: 0px; background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/slice/f4009edfc.png&quot;); width: 53px; height: 56px; top: 27px;"></div></a><a class="gt_fullbg gt_show" style="cursor: default; background-image: none;"><div class="gt_cut_fullbg gt_show"><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -157px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -145px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -265px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -277px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -181px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -169px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -241px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -253px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -109px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -97px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -289px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -301px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -85px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -73px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -25px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -37px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -13px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -1px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -121px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -133px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -61px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -49px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -217px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -229px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -205px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -193px -58px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -145px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -157px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -277px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -265px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -169px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -181px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -253px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -241px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -97px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -109px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -301px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -289px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -73px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -85px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -37px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -25px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -1px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -13px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -133px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -121px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -49px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -61px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -229px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -217px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -193px 0px;"></div><div class="gt_cut_fullbg_slice" style="background-image: url(&quot;https://static.geetest.com/pictures/gt/fc064fc73/fc064fc73.webp&quot;); background-position: -205px 0px;"></div></div><div class="gt_flash" style="height: 94px;"></div><div class="gt_ie_success"></div></a><a class="gt_curtain gt_hide" style="background-image: none;"><div class="gt_curtain_bg_wrap"><div class="gt_curtain_bg"><div class="gt_cut_curtain"></div></div></div><div class="gt_curtain_button gt_hide"></div></a><a class="gt_box_tips" style="display: none;"></a></div><div class="gt_info"><div class="gt_info_tip"><div class="gt_info_icon"></div><div class="gt_info_text"></div></div></div></div><div class="gt_bottom"><a class="gt_refresh_button"><div class="gt_refresh_tips">刷新验证</div></a><a class="gt_help_button" href="http://www.geetest.com/contact#report" target="_blank"><div class="gt_help_tips">帮助反馈</div></a><a class="gt_logo_button" href="http://www.geetest.com/first_page" target="_blank"></a></div></div><div class="gt_input"><input class="geetest_challenge" type="hidden" name="geetest_challenge"><input class="geetest_validate" type="hidden" name="geetest_validate"><input class="geetest_seccode" type="hidden" name="geetest_seccode"></div><div class="gt_slider"><div class="gt_guide_tip gt_show">按住左边滑块，拖动完成上方拼图</div><div class="gt_slider_knob gt_show" style="left: 0px;"></div><div class="gt_curtain_tip gt_hide">点击上图按钮并沿道路拖动到终点处</div><div class="gt_curtain_knob gt_hide">移动到此开始验证</div><div class="gt_ajax_tip gt_ready"></div></div></div></div>
            </div>
        </div>
    </div>
</div>

        <!--注册按钮-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <span class="col-sm-12 ajax-error"></span>
                <button id="submitBtn" type="submit" class="btn ladda-button center-block cnblogs-btn-blue" data-style="zoom-in"><span class="ladda-label">注册</span></button>
            </div>
        </div>
        <!--协议提示-->
        <div class="col-sm-offset-2 register-sign">
            *点击 “注册” 按钮，即表示您同意并愿意遵守 <a class="look-agreeon" target="_blank" href="https://passport.cnblogs.com/agreement.html">用户协议</a>。
        </div>
        <!--hidden-->
        <input type="hidden" id="RegisterFrom" name="RegisterFrom" value="https://www.cnblogs.com/">
        <input type="hidden" id="PublicKey" name="PublicKey" value="MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCp0wHYbg/NOPO3nzMD3dndwS0MccuMeXCHgVlGOoYyFwLdS24Im2e7YyhB0wrUsyYf0/nhzCzBK8ZC9eCWqd0aHbdgOQT6CuFQBMjbyGYvlVYU2ZP7kG9Ft6YV6oc9ambuO7nPZh+bvXH0zDKfi02prknrScAKC0XhadTHT3Al0QIDAQAB">
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8PhlBN8IFxtHhqIV3s0LCDnLFgoiBLe34Wm6FhBO04_R7cBDtFagmg8poJVel2He3-cJ5QwRDQU8ndvf-0Uo-vJFU_3JUOoBZ0aG_nKNV4QPJajK_0-oOQ_S6GL9ezjorLe5hxYpoRq_dgr41I0WT5g"></form>
    <div class="hidden-xs col-sm-4 side-img-box">
        <div class="side-line">
            <div></div>
        </div>
        <img src="{{url('imges/registersideimg.png')}}">
    </div>
</div>

    </div>
    <!--footer-->
    <br style="clear:both">
    <div id="footer_bottom" class="text-center" style="display: block;">
        <div><a href="https://www.cnblogs.com/AboutUS.aspx" class="hidden-xs">关于博客园</a><a href="https://www.cnblogs.com/ContactUs.aspx" class="hidden-xs">联系我们</a>©2004-2017<a href="https://www.cnblogs.com/">博客园</a><span class="hidden-xs">保留所有权利</span> Powered by ASP.NET Core on Linux</div>
    </div>
    
    
        <script src="{{url('js/_layout.min.js')}}"></script>
    
    
    <script src="{{url('js/gt.js')}}"></script>
    <script src="{{url('js/signup.min.js')}}"></script>



</body></html>