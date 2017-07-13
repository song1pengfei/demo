<!DOCTYPE html>

<html><!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

		<!-- Start of Baidu Transcode -->
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<meta http-equiv="Cache-Control" content="no-transform">
		<meta name="applicable-device" content="pc,mobile">
		<meta name="MobileOptimized" content="width">
		<meta name="HandheldFriendly" content="true">
		<meta name="mobile-agent" content="format=html5;url=http://www.jianshu.com/settings">
		<!-- End of Baidu Transcode -->


		<meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8">
		<meta property="wb:webmaster" content="294ec9de89e7fadb">
		<meta property="qc:admins" content="104102651453316562112116375">
		<meta property="qc:admins" content="11635613706305617">
		<meta property="qc:admins" content="1163561616621163056375">
		<meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4">
		<meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI">
		<meta http-equiv="mobile-agent" content="format=html5; url=http://www.jianshu.com/settings">

		<!-- Apple -->
		<meta name="apple-mobile-web-app-title" content="简书">

	  

		<title>设置</title>

		<meta name="csrf-param" content="authenticity_token">
		<meta name="csrf-token" content="VpSCKMTYqyfu3sizLy+c7uj8mc4ogrQtC0A2FWP/CcjjnJfQPhm2IoOPnSzjxAy1lUgL1r9IeRJy+vvOWHNwkA==">

		<link rel="stylesheet" media="all" href="<?php echo e(asset('homes/css/web-15ab19cc7f510036f39f.css')); ?>">
	  
		<link rel="stylesheet" media="all" href="<?php echo e(asset('homes/css/entry-15ab19cc7f510036f39f.css')); ?>">

		<link href="http://cdn2.jianshu.io/assets/favicons/favicon-783beb88ed621ceab614de960376ac0c.ico" rel="icon">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/57-47624b2e2161e8eb144462c85db0a5ff.png')); ?>" sizes="57x57">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/72-c00cde7cf98fc49e50cbb3ee1dcd5804.png')); ?>" sizes="72x72">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/76-e8af0bdeaf1ba31e303b1fde8b5e66c4.png')); ?>" sizes="76x76">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/114-f4c78569bbf1977e8382a5fd90c9237a.png')); ?>" sizes="114x114">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/120-cf10c3711dba269522743729efe66bbc.png')); ?>" sizes="120x120">
		<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('homes/images/152-7bd60457b5f3ecbf1343f0e6241be4f8.png')); ?>" sizes="152x152">
		<link rel="stylesheet" href="blob:http://www.jianshu.com/ba08ed26-92d9-425c-9daa-8e9426b5b812"></head>

	<body lang="zh-CN" class="reader-black-font" style="overflow-y: scroll;">
    <!-- 全局顶部导航栏 -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="width-limit">
		<!-- 左上方 Logo -->
			<a class="logo" href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('imges/logo_small.gif')); ?>" alt="Logo"></a>

			<!-- 右上角 -->
			<!-- 登录显示写文章 -->
			<a class="btn write-btn" target="_blank" href="<?php echo e(url('home/lists')); ?>">
			<i class="iconfont ic-write"></i>我的博客</a>

		<!-- 如果用户登录，显示下拉菜单 -->
			<div class="user">
				<div data-hover="dropdown">
					<a class="avatar" href="http://www.jianshu.com/u/ebd83d2a2318"><img src="<?php echo e(asset('homes/images/15-a7ac401939dd4df837e3bbf82abaa2a8.jpg')); ?>" alt="120"></a>
				</div>
				<ul class="dropdown-menu">
					<li>
						<a href="http://www.jianshu.com/u/ebd83d2a2318">
						<i class="iconfont ic-navigation-profile"></i>
						<span>我的主页</span>
						</a>
					</li>
					<li>
						<!-- TODO bookmarks_path -->
						<a href="http://www.jianshu.com/bookmarks">
						<i class="iconfont ic-navigation-mark"></i><span>收藏的文章</span>
						</a>
					</li>
					
					
				    
				    
					<li>
						<a rel="nofollow" data-method="delete" href="http://www.jianshu.com/sign_out">
						<i class="iconfont ic-navigation-signout"></i>
						<span>退出</span>
						</a>          
					</li>
				</ul>
			</div>

			
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
						<li class="">
						<a href="<?php echo e(url('home')); ?>">
						<span class="menu-text">首页</span>
						<i class="iconfont ic-navigation-discover menu-icon"></i>
						</a>            
						</li>
						<!--<li class="">
						<a href="http://www.jianshu.com/subscriptions">
						<span class="menu-text">关注</span><i class="iconfont ic-navigation-follow menu-icon"></i>
						</a>            
						</li>-->
						<li class="notification">
							
							
						</li>
						<li class="search">
							<form target="_blank" action="http://www.jianshu.com/search" accept-charset="UTF-8" method="get">
								<input name="utf8" type="hidden" value="✓">
								<input type="text" name="q" id="q" value="" placeholder="搜索" class="search-input">
								  <a class="search-btn" href="javascript:void(null)">
								  <i class="iconfont ic-search"></i></a>
								  <!-- <div id="navbar-trending-search"></div> -->
							</form>          
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

    

	<div class="container setting">
		<div class="row">
			<div class="aside">
				<ul>
					<li class="active">
						<a href="http://www.jianshu.com/settings/basic">
						<div class="setting-icon">
							<i class="iconfont ic-settings-basic"></i>
						</div> 
						<span>个人资料</span> 
						<!----></a>
					</li>
					
					
				</ul>
			</div> 
			
			<form class="form-horizontal" action="<?php echo e(URL('home/personal/create')); ?>" method="post">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="_method" value="put">
			<div class="col-xs-16 col-xs-offset-8 main">
				<table>
					<thead>
						<tr>
							<th class="setting-head responsive-head"></th> 
							<th></th>
						</tr>
					</thead> 
					<tbody class="base">
				
				<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td class="top-line">
						<div class="avatar">
							<img src="<?php echo e(asset('homes/images/15-a7ac401939dd4df837e3bbf82abaa2a8(1).jpg')); ?>">
						</div>
					</td> 
					<td class="top-line">
						<a class="btn btn-hollow"><input unselectable="on" type="file" class="hide">更改头像</a>
					
					</td>
				</tr> 
				<tr>
					 
					<td class="setting-title">用户名</td>
						
            
					<td>
						
						<input type="text" value="<?php echo e($v->uname); ?>">
						
					</td>
				</tr> 
				<tr>
					<td class="setting-title">电子邮件</td> 
					<td>
						
							<!--<input type="button" value="发送" class="btn btn-hollow pull-right">-->
							<input type="email" value="<?php echo e($v->email); ?>">
						
					</td>
				</tr> 
				<tr>
					<td class="setting-title">手机</td> 
					<td class="setted">
						<div>157****8103</div> 
							<i class="iconfont ic-collections-followed"></i> 
							<span>已验证</span> 
							<a class="cancel-bind">解除绑定</a>
					</td>
				</tr> 
				<tr>
					<td class="setting-title">年龄</td> 
					<td>
						<input type="text" value="<?php echo e($v->age); ?>">
					</td>
				</tr> 
				<tr>
					<td class="setting-title">性别</td> 
					<td>
						<input type="text" value="<?php echo e($v->sex); ?>">
					</td>
				</tr> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				</tbody>
				</table> 
				
			    <input type="submit" class="btn btn-success setting-save" value="保存">
			    <!--<button type="submit" class="btn btn-success setting-save">保存</button>-->
				<!--<button class="btn btn-success setting-save" onclick="window.location='<?php echo e(URL('admin/personal')); ?>/<?php echo e($v->id); ?>/edit'">编辑</button>--><!----> <!---->
			</div>
			</form>

		</div>
	</d

    <script src="<?php echo e(asset('homes/js/push.js')); ?>"></script>
	<script src="<?php echo e(asset('homes/js/hm.js')); ?>"></script>
	<script async="" src="<?php echo e(asset('homes/js/analytics')); ?>"></script>
	<script type="application/json" data-name="page-data">
		{"user_signed_in":true,"locale":"zh-CN","os":"windows","read_mode":"day","read_font":"font2","current_user":{"id":6659302,"nickname":"我不吃牛羊肉","slug":"ebd83d2a2318","avatar":"http://cdn2.jianshu.io/assets/default_avatar/15-a7ac401939dd4df837e3bbf82abaa2a8.jpg","unread_counts":{"total":null}}}
	</script>
    
    <script src="<?php echo e(asset('homes/js/babel-polyfill-f2c0b85b9d0fcc12d94a.js')); ?>"></script>
    <script src="<?php echo e(asset('homes/js/web-base-15ab19cc7f510036f39f.js')); ?>"></script>
	<script src="<?php echo e(asset('homes/js/web-afdc6659222ac7cf225f.js')); ?>"></script>
    <script src="<?php echo e(asset('homes/js/jquery-fileupload-1ff2f3d611bfbed6f0b71a6f78205a88.js')); ?>"></script>

    <script src="<?php echo e(asset('homes/js/entry-0712bd0f7f33bfc50976.js')); ?>"></script>
    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-35169517-1', 'auto');
		  ga('send', 'pageview');
	</script>

	<script>
		  var _hmt = _hmt || [];
		  (function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?0c0e9d9b1e7d617b3e6842e85b9fb068";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		  })();
	</script>

	<script>
	  (function(){
		  var bp = document.createElement('script');
		  var curProtocol = window.location.protocol.split(':')[0];
		  if (curProtocol === 'https') {
			  bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
		  }
		  else {
			  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
		  }
		  var s = document.getElementsByTagName("script")[0];
		  s.parentNode.insertBefore(bp, s);
	  })();
	</script>

  

	</body>
</html>