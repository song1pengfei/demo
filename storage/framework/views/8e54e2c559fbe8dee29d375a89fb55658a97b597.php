<!DOCTYPE html>
<!-- saved from url=(0039)https://i.cnblogs.com/EditArticles.aspx -->
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			博客后台管理 - 博客园</title>

			<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">
			<script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
            <script src="<?php echo e(asset('js/json2.js')); ?>" type="text/javascript"></script>      
            <script type="text/javascript" src="<?php echo e(asset('js/jquery.cnblogs.thickbox.js')); ?>"></script>
			<script type="text/javascript" src="<?php echo e(asset('js/admin.js')); ?>"></script>

			<link href="<?php echo e(asset('myadmin/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" /> 

	</head>	
	<body id="Articles">
		
			<div class="aspNetHidden">
			<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
			</div>

			<div class="aspNetHidden">

				<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0512620B">
			</div>
				<table id="BodyTable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td id="Header" colspan="2">
								<div id="SiteNav">
									<a href="<?php echo e(url('home/list')); ?>" target="_blank"><?php echo e(session('homeuser')->account); ?></a>
								&nbsp;</div>
								
								<div id="SiteTitle">

									<a id="TitleLink" href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('images/adminlogo.gif')); ?>" alt=""></a>

								</div>


								<br/><br/><br/><br/>
							</td>

						</tr>
						<tr>
							<td>
								<div  id="LeftNavHeader">操作</div>

							</td>
							<td class="NavHeaderRow">
								<ul id="TopNav">		
									<li>
										<a href="<?php echo e(url('home/detail')); ?>" id="TabArticles">文章</a>
									</li>
									
									<li>
										<a href="<?php echo e(url('home/personal')); ?>" id="TabConfigure">设置</a>
									</li>
								</ul>
								<div id="SubNav">
									
								</div>
							</td>
						</tr>
						<tr>
							<td class="NavLeftCell">						
								<div class="left_nav">
									<ul id="LinksActions">
										<li><a href="<?php echo e(url('home/detail/create')); ?>">» 添加新文章</a></li>
									</ul>
								</div>
								

								<div id="CategoriesHeader" class="LeftNavHeader">
									文章状态
								</div>
								<div class="left_nav">
									<ul id="LinksCategories">
										<li><a href="<?php echo e(url('detail/through')); ?>">[已通过的文章]</a></li>
										<li><a href="<?php echo e(url('detail/nothrough')); ?>">[未通过的文章]</a></li>
										<li><a href="<?php echo e(url('detail/daithrough')); ?>">[待审核的文章]</a></li>
									</ul>
								</div>

							</td>
							<td id="Body">
								<div id="Main">
												
								<script type="text/javascript">    
									var isEdit = false;
									var isNewPost = false;
									var currentEditorId = '';
									var currentUseEditor = 0;
									var txbTitleId = 'Editor_Edit_txbTitle';
								</script>
								<div id="Editor_Messages">
												<?php $__env->startSection('content'); ?>
						          页面主内容区
						          <?php echo $__env->yieldSection(); ?>

								</div>




     

   

						<span id="currentPostId" style="display:none;"></span>

								<script type="text/javascript">    
									$(function () {
										if (isEdit) {
											document.getElementById('Editor_Edit_txbTitle').focus();
											if (currentUseEditor == 1) {
												var editor1 = document.getElementById(currentEditorId);
												if (editor1.IsReady) CuteEditor_OnInitialized(editor1);
											}
											setInterval(localPreserver.saveDraftBody, 10000);
											localPreserver.showViewTip();            
										}
										
									});
								</script>


							</div>
						</td>
					</tr>
				</tbody>
			</table>
								   <!-- <div id="blog_top_nav_block">
										<div id="site_nav">
										«<a href="http://www.cnblogs.com/">网站首页</a><a href="http://home.cnblogs.com/">园子</a><a href="http://news.cnblogs.com/">新闻</a><a href="https://q.cnblogs.com/">博问</a><a href="https://ing.cnblogs.com/">闪存</a><a href="http://wz.cnblogs.com/">收藏</a><a href="http://zzk.cnblogs.com/my?app=Blogpost">搜索</a>
										</div> 
										<div id="login_area">          
										<span id="span_userinfo"><a id="lnkBlogUrl" href="http://home.cnblogs.com/u/fnxz/">冯强0_0</a> · <a href="http://msg.cnblogs.com/" target="_blank" id="lnk_site_msg">短消息<span class="new_msg">(2)</span></a> · <a href="http://passport.cnblogs.com/logout.aspx?ReturnURL=http://www.cnblogs.com/fnxz/" onclick="return confirm(&#39;确认要退出登录吗?&#39;)">退出</a></span>
										</div>-->
			<div class="clear"></div> 
			</div>
				<table id="Footer" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td colspan="2">
								<div>
									<a href="http://www.cnblogs.com/ContactUs.aspx">联系我们</a> <a href="http://space.cnblogs.com/forum/public">反馈问题</a> @2017&nbsp;<a id="lnkSite" href="http://www.cnblogs.com/">博客园</a> &nbsp;技术改变世界
								</div>
							</td>
						</tr>
					</tbody>
				</table>
	
				<script type="text/javascript">
					GetNewMsgCount();
				</script>        
							


	</body>
</html>