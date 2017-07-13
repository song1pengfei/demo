<!DOCTYPE html>
<!-- saved from url=(0045)https://i.cnblogs.com/EditArticles.aspx?opt=1 -->
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			博客后台管理 - 博客园</title>
		                
			<link rel="stylesheet" type="text/css" href="<?php echo e(asset('homes/css/admin.css')); ?>">
			<script src="<?php echo e(asset('homes/js/jquery.js')); ?>" type="text/javascript"></script>
            <script src="<?php echo e(asset('homes/js/json2.js')); ?>" type="text/javascript"></script>      
            <script type="text/javascript" src="<?php echo e(asset('homes/js/jquery.cnblogs.thickbox.js')); ?>"></script>
			<script type="text/javascript" src="<?php echo e(asset('homes/js/admin.js')); ?>"></script>
	</head>	
	<body id="Articles">
		<form method="post" action="https://i.cnblogs.com/EditArticles.aspx?opt=1" id="frmMain">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="aspNetHidden">
			<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
			</div>

			<script type="text/javascript">window.onbeforeunload = function() { if(!canLeavePage()) return ('确认离开当前页面吗？未保存的数据将会丢失！');}</script>
			<script language="JavaScript" src="<?php echo e(asset('homes/js/uicontrols.js')); ?>"></script>
				<div class="aspNetHidden">

				<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0512620B">
				</div>
						<table id="BodyTable" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td id="Header" colspan="2">
										<div id="SiteNav"><a href="http://www.cnblogs.com/Skins.aspx" target="_blank">模板</a></div>
										<div id="BlogTitle">
											<a id="BlogTitleLink" href="http://www.cnblogs.com/fnxz/"></a>
										</div>
										<div id="SiteTitle">
											<a id="TitleLink" href="http://www.cnblogs.com/"><img src="<?php echo e(asset('homes/images/adminlogo.gif')); ?>" alt=""></a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div id="LeftNavHeader">操作</div>
									</td>
									<td class="NavHeaderRow">
										<ul id="TopNav">
										
											<li>
												<a href="https://i.cnblogs.com/EditArticles.aspx" id="TabArticles">文章</a>
											</li>
											<li>
												<a href="https://i.cnblogs.com/Feedback.aspx" id="TabFeedback">评论</a>
											</li>
											<li id="FilesTab">
												<a href="https://i.cnblogs.com/Files.aspx" id="TabFiles">文件</a>
											</li>	
											<li>
												<a href="https://i.cnblogs.com/Configure.aspx" id="TabConfigure">设置</a>
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
												<li><a href="https://i.cnblogs.com/EditArticles.aspx?opt=1">» 添加新文章</a></li>
											</ul>
										</div>
										<div id="CategoriesHeader" class="LeftNavHeader">
												发布查询
										</div>
										<div class="left_nav">
											<ul id="LinksCategories">
												<li><a href="https://i.cnblogs.com/EditCategories.aspx?catid=2">通过</a></li>
												<li><a href="https://i.cnblogs.com/EditArticles.aspx">未通过</a></li>
												<li><a href="https://i.cnblogs.com/EditArticles.aspx?catid=-2">待审核</a></li>
											</ul>
										</div>
									</td>
									<td id="Body">
							<div id="Main">
										
									
								<script type="text/javascript">    
									var isEdit = true;
									var isNewPost = true;
									var currentEditorId = 'Editor_Edit_EditorBody';
									var currentUseEditor = 5;
									var txbTitleId = 'Editor_Edit_txbTitle';
								</script>
								<div id="Editor_Messages">
									

								</div>

								<div id="Editor_Edit">
									<div id="Editor_Edit_Header" class="CollapsibleTitle">
										<span id="Editor_Edit_headerTitle">添加文章</span>
									</div>
								<div id="Editor_Edit_Contents">
									<div id="edit_container">
										<div id="edit_title">
											<b>标题</b>            
											<br>
											<input name="Editor$Edit$txbTitle" type="text" maxlength="200" id="Editor_Edit_txbTitle" onblur="localPreserver.saveDraftTitle();" onkeydown="title_keydown(event);" style="width:99%;">
										</div>
										<div id="edit_title">
											<b>作者</b>            
											<br>
											<input name="Editor$Edit$txbTitle" type="text" maxlength="200" id="Editor_Edit_txbTitle" onblur="localPreserver.saveDraftTitle();" onkeydown="title_keydown(event);" style="width:99%;">
										</div>
										<div id="edit_body">
											<div id="edit_body_tip">
											<b>内容</b>(Markdown编辑器，支持拖放/粘贴上传图片) <span id="write_hint" style="color: green;"><a href="javascript:void(0);" onclick="localPreserver.showSaved();return false;">查看自动保存内容</a></span>
											</div>
											<img title="上传图片" onclick="markdown_image_upload(&#39;Editor_Edit_EditorBody&#39;);return false;" src="<?php echo e(asset('homes/images/img.gif')); ?>" alt="上传图片">
											<textarea name="Editor$Edit$EditorBody" rows="2" cols="20" id="Editor_Edit_EditorBody" onkeydown="insert_tab(this,event)"></textarea>
											<script src="<?php echo e(asset('homes/js/paste-upload-image.js')); ?>"></script>
											<script>$('#Editor_Edit_EditorBody').pasteUploadImage('www.cnblogs.com');</script>
										</div>
									</div>
								</div>

								<div class="post_block">
									<input type="submit" name="Editor$Edit$lkbPost" value="发布" onclick="return CheckInput();" id="Editor_Edit_lkbPost" class="Button">
									<input type="submit" name="Editor$Edit$lkbCancel" value="取消" onclick="return CancelPost();" id="Editor_Edit_lkbCancel" class="Button">            
								</div>         
								<div style="clear:both;"></div>      
								<span id="tip_posging" style="padding-left:20px;color:red; vertical-align: middle;"></span> 
								<div style="padding-bottom:10px;margin-top:10px;"> 
								
								</div> 
								</div>

							</div>
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
            <div id="blog_top_nav_block">
                <div id="site_nav">
                «<a href="http://www.cnblogs.com/">网站首页</a>
				<a href="http://home.cnblogs.com/">园子</a>
				<a href="http://news.cnblogs.com/">新闻</a>
				<a href="https://q.cnblogs.com/">博问</a>
				<a href="https://ing.cnblogs.com/">闪存</a>
				<a href="http://wz.cnblogs.com/">收藏</a>
				<a href="http://zzk.cnblogs.com/my?app=Blogpost">搜索</a>
                </div> 
                <div id="login_area">          
                <span id="span_userinfo">
					<a id="lnkBlogUrl" href="http://home.cnblogs.com/u/fnxz/">冯强0_0</a>
					· <a href="http://msg.cnblogs.com/" target="_blank" id="lnk_site_msg">短消息</a>
					· <a href="http://passport.cnblogs.com/logout.aspx?ReturnURL=http://www.cnblogs.com/fnxz/" onclick="return confirm(&#39;确认要退出登录吗?&#39;)">退出</a></span>
                </div>
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
		</form>
        <script type="text/javascript">
             GetNewMsgCount();
        </script>        
	</body>
</html>