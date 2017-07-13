<!DOCTYPE html>
<!-- saved from url=(0039)https://i.cnblogs.com/EditArticles.aspx -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			博客后台管理 - 博客园</title>

			<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
			<script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/json2.js')}}" type="text/javascript"></script>      
            <script type="text/javascript" src="{{asset('js/jquery.cnblogs.thickbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
	</head>	
	<body id="Articles">
		<form method="post" action="https://i.cnblogs.com/EditArticles.aspx" id="frmMain">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0512620B">
</div>
			<table id="BodyTable" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<td id="Header" colspan="2">
						<div id="SiteNav"><a href="http://home.cnblogs.com/set/account/" target="_blank">修改密码</a>
						&nbsp;|&nbsp;</div>
						<div id="BlogTitle"><a id="BlogTitleLink" href="http://www.cnblogs.com/fnxz/">冯强0_0</a>
						</div>
						<div id="SiteTitle">
							<a id="TitleLink" href="http://www.cnblogs.com/"><img src="{{asset('images/adminlogo.gif')}}" alt=""></a>
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
							<ul id="LinksActions"><li><a href="https://i.cnblogs.com/EditArticles.aspx?opt=1">» 添加新文章</a></li>
							</ul>
						</div>
						<div id="CategoriesHeader" class="LeftNavHeader">
							分类
						</div>
						<div class="left_nav">
							<ul id="LinksCategories"><li><a href="https://i.cnblogs.com/EditCategories.aspx?catid=2">[编辑分类]</a></li><li><a href="https://i.cnblogs.com/EditArticles.aspx">[所有分类]</a></li><li><a href="https://i.cnblogs.com/EditArticles.aspx?catid=-2">[未分类]</a></li></ul>
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
	

</div>
<div id="Editor_Results">
	<div id="Editor_Results_Contents">
		
    
            <table id="Listing" class="Listing" cellspacing="0" cellpadding="0" border="0" style="">
                <tbody><tr style="text-align: center">
                    <th valign="bottom">
                        标题
                    </th>
                    <th width="50" style="text-align: center">
                        发布状态
                    </th>
                    <th width="50" style="text-align: center">
                        评论数
                    </th>
                    <th width="50" style="text-align: center">
                        阅读数
                    </th>                    
                    <th width="40" style="text-align: center">
                        操作
                    </th>
                    <th width="40" style="text-align: center">
                        操作
                    </th>
                </tr>
        
            <tr id="entry_7086936" class="Alt">
                <td>
                    <a class="titlelink" href="http://www.cnblogs.com/fnxz/articles/7086936.html">
                        Android 设计模式实战之关于封装计费代码库的策略模式详谈</a> (2017-06-27 20:12)
                    
                                        
                </td>
                <td style="text-align: center">
                    发布
                </td>
                <td style="text-align: center">
                    0
                </td>
                <td style="text-align: center">
                    1
                </td>                
                <td style="text-align: center">
                      <a href="https://i.cnblogs.com/EditArticles.aspx?postid=7086936&amp;update=1">编辑</a>
                </td>
                <td style="text-align: center">
                    <a href="https://i.cnblogs.com/EditArticles.aspx#" onclick="return DeletePost(7086936,&#39;Android 设计模式实战之关于封装计费代码库的策略模式详谈&#39;)">删除</a>
                </td>
            </tr>
        
            <tr id="entry_7086933" class="">
                <td>
                    <a class="titlelink" href="http://www.cnblogs.com/fnxz/articles/7086933.html">
                        Greenplum——大数据时代高性能的数据仓库与BI应用平台</a> (2017-06-27 20:10)
                    
                                        
                </td>
                <td style="text-align: center">
                    发布
                </td>
                <td style="text-align: center">
                    0
                </td>
                <td style="text-align: center">
                    1
                </td>                
                <td style="text-align: center">
                      <a href="https://i.cnblogs.com/EditArticles.aspx?postid=7086933&amp;update=1">编辑</a>
                </td>
                <td style="text-align: center">
                    <a href="https://i.cnblogs.com/EditArticles.aspx#" onclick="return DeletePost(7086933,&#39;Greenplum——大数据时代高性能的数据仓库与BI应用平台&#39;)">删除</a>
                </td>
            </tr>
        
            </tbody></table>
        
    
    

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
			</tbody></table>
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
				<tbody><tr>
					<td colspan="2">
						<div>
							<a href="http://www.cnblogs.com/ContactUs.aspx">联系我们</a> <a href="http://space.cnblogs.com/forum/public">反馈问题</a> @2017&nbsp;<a id="lnkSite" href="http://www.cnblogs.com/">博客园</a> &nbsp;技术改变世界
						</div>
					</td>
				</tr>
			</tbody></table>
		</form>
        <script type="text/javascript">
             GetNewMsgCount();
        </script>        
	


</body></html>