
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="qc:admins" content="24530273213633466654">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帐号登录</title>
    
    
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/weixinqr.css')}}">
    <script src="{{asset('js/hm.js.下载')}}"></script><script src="{{asset('js/wxLogin.js.下载')}}"></script>
  
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?6bcd52f51e9b3dce32bec4a3997715ac";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
    <script type="text/javascript" charset="utf-8" src="{{asset('js/tracking.js.下载')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('js/main.js.下载')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="login-config.js;jsessionid=BE9121B7D37A0B860DF131A42DB6BF3F.tomcat2" src="{{asset('js/login-config.js.下载')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="libs/jquery" src="{{asset('js/jquery.js.下载')}}"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="apps/login" src="{{asset('js/login.js.下载')}}"></script>
    
    </head>
  <body>
  	<div id="hidebg"></div>
	<div id="hidebox"><div id="close" onclick="hide();"></div><div id="wxqr" class="wxqr"><iframe src="{{asset('js/qrconnect.html')}}" frameborder="0" scrolling="no" width="300px" height="400px"></iframe></div></div>
  	<script type="text/javascript">
  		var protocol = window.location.protocol;
  		document.write('<script type="text/javascript" src="' +protocol+ '//csdnimg.cn/pubfooter/js/repoAddr2.js?v=' + Math.random() + '"></'+'script>');
	</script><script type="text/javascript" src="{{asset('js/repoAddr2.js.下载')}}"></script>
	
    <div class="header"></div>
    <div class="main">
      <div class="container container-custom">
        <div class="row wrap-login">
          <div class="login-banner col-sm-6 col-md-7 col-lg-7 hidden-xs">
            <a href="" target="_blank">
                <img src="{{asset('login-a.png')}}" class="img-responsive"></a></div>
          <div class="login-user col-xs-12 col-sm-6 col-md-5 col-lg-5">
            <div class="login-part">
              <h3>帐号登录 </h3>
              <div class="user-info">
                <div class="user-pass">
                
                  <form id="fm1" action="{{url('home/dologin')}}" method="post">
                     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input id="username" name="account" tabindex="1" placeholder="输入用户名/邮箱/手机号" class="user-name" type="text" value="">
                    
                    <input id="password" name="pass" tabindex="2" placeholder="输入密码" class="pass-word" type="password" value="" autocomplete="off">
                    

							<div class="error-mess" style="display:none;">
								<span class="error-icon"></span><span id="error-message"></span>
							</div>
						
					
					
                    <div class="row forget-password">
                    	<span class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        	<input type="checkbox" name="rememberMe" id="rememberMe" value="true" class="auto-login" tabindex="4">
                        	<label for="rememberMe">下次自动登录</label>
                        </span>
                        <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 forget tracking-ad" data-mod="popu_26">
                        	<a href="" tabindex="5">忘记密码</a>&nbsp;&nbsp;
                            <a href="">立即注册</a>
                        </span>
                    </div>
                    <!-- 该参数可以理解成每个需要登录的用户都有一个流水号。只有有了webflow发放的有效的流水号，用户才可以说明是已经进入了webflow流程。否则，没有流水号的情况下，webflow会认为用户还没有进入webflow流程，从而会重新进入一次webflow流程，从而会重新出现登录界面。 -->
					<input type="hidden" name="lt" value="LT-51815-3AOQzBp7d3ZcgiaC7eGmbr4kkSw9Nb">
			 		<input type="hidden" name="execution" value="e1s1"> 
					<input class="logging" type="submit" name="_eventId" value="登 录"> 
					<!--<input class="logging" value="登 录" tabindex="6" type="button"> -->
                    
                  </form>
                </div>
              </div>
              <div class="line"></div>
     
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer"></div>
            
				
  
</body></html>