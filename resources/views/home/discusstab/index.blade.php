<!DOCTYPE html>
<!-- saved from url=(0061)http://www.cnblogs.com/f-ck-need-u/p/7100336.html#commentform -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="{{url('js/analytics.js')}}"></script><script type="text/javascript" src="{{url('js/encoder.js')}}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>评论列表</title>
<link type="text/css" rel="stylesheet" href="{{url('css/blog-common.css')}}">
<link id="MainCss" type="text/css" rel="stylesheet" href="{{url('css/bundle-darkgreentrip.css')}}">
<link id="mobile-style" media="only screen and (max-width: 768px)" type="text/css" rel="stylesheet" href="{{url('css/bundle-darkgreentrip-mobile.css')}}">
<link title="RSS" type="application/rss+xml" rel="alternate" href="http://www.cnblogs.com/f-ck-need-u/rss">
<link title="RSD" type="application/rsd+xml" rel="EditURI" href="http://www.cnblogs.com/f-ck-need-u/rsd.xml">
<link type="application/wlwmanifest+xml" rel="wlwmanifest" href="http://www.cnblogs.com/f-ck-need-u/wlwmanifest.xml">
<script src="{{url('js/jquery.js')}}" type="text/javascript"></script>  
<script type="text/javascript">var currentBlogApp = 'f-ck-need-u', cb_enable_mathjax=false;var isLogined=true;</script>
<script src="{{url('js/blog-common.js')}}" type="text/javascript"></script>
</head>
<body>
<a name="top"></a>

<!--done-->
<div id="home">
<div id="header">
	<!--end: blogTitle 博客的标题和副标题 -->
	<div id="navigator">
		
<ul id="navList">
<li><a id="blog_nav_sitehome" class="menu" href="http://www.cnblogs.com/">博客园</a></li>
<li><a id="blog_nav_myhome" class="menu" href="{{url('home')}}">首页</a></li>
<li><a id="blog_nav_newpost" class="menu" rel="nofollow" href="https://i.cnblogs.com/EditPosts.aspx?opt=1">新随笔</a></li>
<li></li>
<li><a id="blog_nav_rss" class="menu" href="http://www.cnblogs.com/f-ck-need-u/rss">订阅</a>
<!--<a id="blog_nav_rss_image" class="aHeaderXML" href="http://www.cnblogs.com/f-ck-need-u/rss"><img src="//www.cnblogs.com/images/xml.gif" alt="订阅" /></a>--></li>
<li><a id="blog_nav_admin" class="menu" rel="nofollow" href="https://i.cnblogs.com/">管理</a></li>
</ul>
		<div class="blogStats">

		
		
		
		
			
		</div><!--end: blogStats -->
	</div><!--end: navigator 博客导航栏 -->
</div><!--end: header 头部 -->

<div id="main">
	<div id="mainContent">
	<div class="forFlow">
		
<div id="post_detail">
<!--done-->
<div id="topics">
	<div class="post">
		<h1 class="postTitle">
			<a id="cb_post_title_url" class="postTitle2" href="http://www.cnblogs.com/f-ck-need-u/p/7100336.html">Linux开机详细流程</a>
		</h1>
		<div class="clear"></div>
		<div class="postBody">
			<div id="cnblogs_post_body"><hr>

<hr>

<div>

@foreach($art as $v)
	标题:{{$v->title}}<br/>
	作者:{{$v->author}}<br/>
	
	发布于:{{$v->addtime}}<br/>
	
@endforeach

@foreach($ar as $v)
内容:{{$v->content}}<br/>
@endforeach





</div>


<form action="{{url('home/discusstab')}}" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="articleid" value="{{$v->title}}">




<div id="EntryTag"></div>
<div id="blog_post_info"><div id="green_channel">
        <a href="javascript:void(0);" id="green_channel_digg" onclick="DiggIt(7100336,cb_blogId,1);green_channel_success(this,&#39;谢谢推荐！&#39;);">好文要顶</a>
            <a id="green_channel_follow" onclick="follow(&#39;1e7fa90d-decd-e411-b908-9dcfd8948a71&#39;);" href="javascript:void(0);">关注我</a>
    <a id="green_channel_favorite" onclick="AddToWz(cb_entryId);return false;" href="javascript:void(0);">收藏该文</a>
    <a id="green_channel_weibo" href="javascript:void(0);" title="分享至新浪微博" onclick="ShareToTsina()"><img src="{{url('images/icon_weibo_24.png')}}" alt=""></a>
    <a id="green_channel_wechat" href="javascript:void(0);" title="分享至微信" onclick="shareOnWechat()"><img src="{{url('images/wechat.png')}}" alt=""></a>
</div>


</div>	
<div class="clear"></div>

</div>


		</div>
		
	</div>
	
	
</div><!--end: topics 文章、评论容器-->
</div><a name="!comments"></a><div id="blog-comments-placeholder"></div><script type="text/javascript">var commentManager = new blogCommentManager();commentManager.renderComments(0);</script>
<div id="comment_form" class="commentform">
<a name="commentform"></a>
<div id="divCommentShow"></div>
<div id="comment_nav"><span id="span_refresh_tips"></span><a href="{{url('/home/discusstab')}}">刷新评论</a><a href="{{url('/home/discusstab')}}">刷新页面</a><a href="">返回顶部</a></div>
<div id="comment_form_container">

<div id="commentform_title">发表评论</div>
<span id="tip_comment" style="color:Red"></span>
<p>
昵称：<input type="text" id="tbCommentAuthor" class="author" disabled="disabled" size="50" value="{{$js->uname}} ">
</p>
<div class="commentbox_main" style="float:left">
<div class="commentbox_title">
<div class="commentbox_title_left">  评论内容：</div>

</div>
<div class="clear" ></div>
<textarea id="tbCommentBody" name="content" class="comment_textarea"></textarea>



<textarea id="tbCommentBody" class="comment_textarea" readonly> 
@foreach($list as $vo)
昵称:{{$js->uname}} 
{{$vo->content}}                 
@endforeach 
</textarea>

</div>

<p id="commentbox_opt" style="float:left">
<button><a href="{{url('home')}}">退出</a></button>

<input type="submit" value="提交">
</p>
</form> 


<div >


</div>

</div>

<script type="text/javascript">
    fixPostBody();
    setTimeout(function () { incrementViewCount(cb_entryId); }, 50);
    deliverAdT2();
    deliverAdC1();
    deliverAdC2();    
    loadNewsAndKb();
    loadBlogSignature();
    LoadPostInfoBlock(cb_blogId, cb_entryId, cb_blogApp, cb_blogUserGuid);
    GetPrevNextPost(cb_entryId, cb_blogId, cb_entryCreatedDate);
    loadOptUnderPost();
    GetHistoryToday(cb_blogId, cb_blogApp, cb_entryCreatedDate);   
</script>
</div>


	</div><!--end: forFlow -->
	</div><!--end: mainContent 主体内容容器-->

	<div id="sideBar">
		<div id="sideBarMain">
			
<!--done-->

<div id="sidebar_search" class="mySearch">
<h3 class="catListTitle">搜索</h3>
<div id="sidebar_search_box">

<div id="widget_my_google" class="div_my_zzk"><input type="text" name="google_q" id="google_q" onkeydown="return google_go_enter(event)" class="input_my_zzk">&nbsp;<input onclick="google_go()" type="button" value="谷歌搜索" class="btn_my_zzk"></div>
</div>
</div>

<div class="newsItem">
<h3 class="catListTitle">公告</h3>
	<div id="blog-news"></a><div id="profile_block">昵称：{{$js->uname}}<br>园龄：</div></div>
</div>

			<div id="blog-calendar" style=""><table id="blogCalendar" class="Cal" cellspacing="0" cellpadding="0" title="Calendar">
	<tbody><tr><td colspan="7"><table class="CalTitle" cellspacing="0">
		<tbody><tr><td class="CalNextPrev"><a href="javascript:void(0);" onclick="loadBlogCalendar(&#39;2017/05/01&#39;);return false;">&lt;</a></td><td align="center">2017年6月</td><td class="CalNextPrev" align="right"><a href="javascript:void(0);" onclick="loadBlogCalendar(&#39;2017/07/01&#39;);return false;">&gt;</a></td></tr>
	</tbody></table></td></tr><tr><th class="CalDayHeader" align="center" abbr="日" scope="col">日</th><th class="CalDayHeader" align="center" abbr="一" scope="col">一</th><th class="CalDayHeader" align="center" abbr="二" scope="col">二</th><th class="CalDayHeader" align="center" abbr="三" scope="col">三</th><th class="CalDayHeader" align="center" abbr="四" scope="col">四</th><th class="CalDayHeader" align="center" abbr="五" scope="col">五</th><th class="CalDayHeader" align="center" abbr="六" scope="col">六</th></tr><tr><td class="CalOtherMonthDay" align="center">28</td><td class="CalOtherMonthDay" align="center">29</td><td class="CalOtherMonthDay" align="center">30</td><td class="CalOtherMonthDay" align="center">31</td><td align="center">1</td><td align="center">2</td><td class="CalWeekendDay" align="center">3</td></tr><tr><td class="CalWeekendDay" align="center">4</td><td align="center">5</td><td align="center">6</td><td align="center">7</td><td align="center">8</td><td align="center">9</td><td class="CalWeekendDay" align="center">10</td></tr><tr><td class="CalWeekendDay" align="center">11</td><td align="center"><u>12</u></a></td><td align="center">13</td><td align="center"><u>14</u></a></td><td align="center"><u>15</u></a></td><td align="center">16</td><td class="CalWeekendDay" align="center">17</td></tr><tr><td class="CalWeekendDay" align="center">18</td><td align="center"><u>19</u></a></td><td align="center">20</td><td align="center"><u>21</u></td><td align="center"><u>22</u></a></td><td align="center">23</td><td class="CalWeekendDay" align="center"><u>24</u></a></td></tr><tr><td class="CalWeekendDay" align="center">25</td><td align="center">26</td><td align="center"><u>27</u></a></td><td align="center">28</td><td align="center"><u>29</u></a></td><td class="CalTodayDay" align="center"><u>30</u></a></td><td class="CalOtherMonthDay" align="center">1</td></tr><tr><td class="CalOtherMonthDay" align="center">2</td><td class="CalOtherMonthDay" align="center">3</td><td class="CalOtherMonthDay" align="center">4</td><td class="CalOtherMonthDay" align="center">5</td><td class="CalOtherMonthDay" align="center">6</td><td class="CalOtherMonthDay" align="center">7</td><td class="CalOtherMonthDay" align="center">8</td></tr>
</tbody></table></div><script type="text/javascript">loadBlogDefaultCalendar();</script>
			
			<div id="leftcontentcontainer">
				<div id="blog-sidecolumn"><div id="sidebar_search" class="sidebar-block">


</div><div id="sidebar_shortcut" class="sidebar-block">
<div class="catListLink">
<h3 class="catListTitle">常用链接</h3>
<ul>
<li>我的随笔</li><li>我的评论</li><li>我的参与</li><li>最新评论</li><li>我的标签</li>
</ul>
<div id="itemListLin_con" style="display:none;">
<ul>

</ul>
</div>
</div>
</div>

</div>


</body></html>
