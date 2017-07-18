<!DOCTYPE html>
<!-- saved from URL=(0061)http://www.cnblogs.com/f-ck-need-u/p/7100336.html#commentform -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="{{URL('js/analytics.js')}}"></script><script type="text/javascript" src="{{URL('js/encoder.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>详情评论列表</title>
<link type="text/css" rel="stylesheet" href="{{URL('css/blog-common.css')}}">
<link id="MainCss" type="text/css" rel="stylesheet" href="{{URL('css/bundle-darkgreentrip.css')}}">
<link id="mobile-style" media="only screen and (max-width: 768px)" type="text/css" rel="stylesheet" href="{{URL('css/bundle-darkgreentrip-mobile.css')}}">
<link title="RSS" type="application/rss+xml" rel="alternate" href="http://www.cnblogs.com/f-ck-need-u/rss">
<link title="RSD" type="application/rsd+xml" rel="EditURI" href="http://www.cnblogs.com/f-ck-need-u/rsd.xml">
<link type="application/wlwmanifest+xml" rel="wlwmanifest" href="http://www.cnblogs.com/f-ck-need-u/wlwmanifest.xml">
<script src="{{URL('js/jquery.js')}}" type="text/javascript"></script>  
<script src="{{URL('js/jquery-1.8.3.min.js')}}" type="text/javascript"></script>  
<script type="text/javascript">var currentBlogApp = 'f-ck-need-u', cb_enable_mathjax=false;var isLogined=true;</script>
<!--可能出错 暂时注销  by桑大亨
<script src="{{URL('js/blog-common.js')}}" type="text/javascript"></script>
-->

</head>
<body>
<a name="top"></a>

<!--done-->
<div id="home">
<div id="header">
	<!--end: blogTitle 博客的标题和副标题 -->
	<div id="navigator">		
<ul id="navList">
<li><a id="blog_nav_sitehome" class="menu" href="{{URL('home')}}">博客园</a></li>
<li><a id="blog_nav_myhome" class="menu" href="{{URL('home/list')}}">列表</a></li>
<li></li>
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
@foreach($art as $ve)	
<div id="topics">
	<div class="post">
		<h1 class="postTitle">
			<a id="cb_post_title_url" class="postTitle2" href="http://www.cnblogs.com/f-ck-need-u/p/7100336.html">{{$ve->title}}</a>
		</h1>
		<div class="clear"></div>
		<div class="postBody">
			<div id="cnblogs_post_body">

作者:{{$ve->author}}<br/>
发布于:{{$ve->addtime}}<br/>
@endforeach
@foreach($ar as $v)
内容:<?php echo (htmlspecialchars_decode($v['content']));?>
@endforeach	
<div id="EntryTag"></div>
<div id="blog_post_info"><div id="green_channel">
<a href="javascript:void(0);" id="green_channel_digg" onclick="DiggIt(7100336,cb_blogId,1);green_channel_success(this,&#39;谢谢推荐！&#39;);">好文要顶</a>
<a id="green_channel_follow" onclick="follow(&#39;1e7fa90d-decd-e411-b908-9dcfd8948a71&#39;);" href="javascript:void(0);">关注我</a>
<a id="green_channel_favorite" onclick="AddToWz(cb_entryId);return false;" href="javascript:void(0);">收藏该文</a>
<a id="green_channel_weibo" href="javascript:void(0);" title="分享至新浪微博" onclick="ShareToTsina()"><img src="{{URL('images/icon_weibo_24.png')}}" alt=""></a>
<a id="green_channel_wechat" href="javascript:void(0);" title="分享至微信" onclick="shareOnWechat()"><img src="{{URL('images/wechat.png')}}" alt=""></a>
</div>
</div>	
<div class="clear"></div>
</div>
</div></div>	
</div><!--end: topics 文章、评论容器-->
</div><a name="!comments"></a><div id="blog-comments-placeholder"></div>

<!--可能出错 暂时注销  by桑大亨
<script type="text/javascript">var commentManager = new blogCommentManager();commentManager.renderComments(0);</script>

-->


<div id="comment_form" class="commentform">
<a name="commentform"></a>
<div id="divCommentShow"></div>
<div id="comment_nav"><span id="span_refresh_tips"></span><a href="">刷新评论</a><a href="">刷新页面</a><a href="">返回顶部</a>
</div>
<div id="comment_form_container">

<span id="tip_comment" style="color:Red"></span>
<p>
@if(session('homeuser'))
昵称：<input type="text" id="tbCommentAuthor" class="author" disabled="disabled" size="50" value="{{session('homeuser')->account}}">
@endif
</p>
<div class="commentbox_main" style="float:left">
<div class="commentbox_title">
<div class="commentbox_title_left">  评论内容：</div>
</div>
<div class="clear" ></div>

<!--评论开始-->

<form id="dd" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($art as $ve)
<input type="hidden" name="articleid" value="{{$ve->id}}">	
<input type="hidden" name="articleid" value="{{$ve->title}}">
@endforeach	
<textarea id="ds" name="content" class="comment_textarea">

</textarea>
<textarea id="answertable" class="comment_textarea" readonly> 
@if(session('homeuser'))
@foreach($list as $vo)
昵称:{{session('homeuser')->account}}	
{{$vo->content}}                 
@endforeach 
@endif
</textarea>
</div>
<p id="commentbox_opt" style="float:left">


</p>
</form><br/>
<div style="width:500px;hight:10px;padding-left:200px">
<button><a href="{{URL('home')}}">退出</a></button>
<button onclick="return DoSubmit()" value="">提交</button>
</div>
</div>
<script>
 function DoSubmit(){
	 $("#answertable").show();
	 $.ajax({
	  url:'{{URL('home/discusstab')}}', 
	  type:'post',
	  data:$("#dd").serialize(),
	  dataType:'json',
	  async:true,
	  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
	  success:function(data){
			//alert(data);
		  //console.log(data);
		 // alert('fawfwdafaew');
		  for(var i in data){
				   $("#answertable").append(data[i]+"　");
				   $("#ds").val('');
				 
		  }
	  }
	 
	   });
	 // return false;
 }
  
</script>

<!--可能出错 暂时注销  by桑大亨
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
-->

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
@if(session('homeuser'))
	<div id="blog-news"></a><div id="profile_block">昵称:{{session('homeuser')->account}}<br></div></div>
@endif
</div>

			<div id="blog-calendar" style=""><table id="blogCalendar" class="Cal" cellspacing="0" cellpadding="0" title="Calendar">
	<tbody><tr><td colspan="7"><table class="CalTitle" cellspacing="0">
		<tbody><tr><td class="CalNextPrev"><a href="javascript:void(0);" onclick="loadBlogCalendar(&#39;2017/05/01&#39;);return false;">&lt;</a></td><td align="center">2017年6月</td><td class="CalNextPrev" align="right"><a href="javascript:void(0);" onclick="loadBlogCalendar(&#39;2017/07/01&#39;);return false;">&gt;</a></td></tr>
	</tbody></table></td></tr><tr><th class="CalDayHeader" align="center" abbr="日" scope="col">日</th><th class="CalDayHeader" align="center" abbr="一" scope="col">一</th><th class="CalDayHeader" align="center" abbr="二" scope="col">二</th><th class="CalDayHeader" align="center" abbr="三" scope="col">三</th><th class="CalDayHeader" align="center" abbr="四" scope="col">四</th><th class="CalDayHeader" align="center" abbr="五" scope="col">五</th><th class="CalDayHeader" align="center" abbr="六" scope="col">六</th></tr><tr><td class="CalOtherMonthDay" align="center">28</td><td class="CalOtherMonthDay" align="center">29</td><td class="CalOtherMonthDay" align="center">30</td><td class="CalOtherMonthDay" align="center">31</td><td align="center">1</td><td align="center">2</td><td class="CalWeekendDay" align="center">3</td></tr><tr><td class="CalWeekendDay" align="center">4</td><td align="center">5</td><td align="center">6</td><td align="center">7</td><td align="center">8</td><td align="center">9</td><td class="CalWeekendDay" align="center">10</td></tr><tr><td class="CalWeekendDay" align="center">11</td><td align="center"><u>12</u></a></td><td align="center">13</td><td align="center"><u>14</u></a></td><td align="center"><u>15</u></a></td><td align="center">16</td><td class="CalWeekendDay" align="center">17</td></tr><tr><td class="CalWeekendDay" align="center">18</td><td align="center"><u>19</u></a></td><td align="center">20</td><td align="center"><u>21</u></td><td align="center"><u>22</u></a></td><td align="center">23</td><td class="CalWeekendDay" align="center"><u>24</u></a></td></tr><tr><td class="CalWeekendDay" align="center">25</td><td align="center">26</td><td align="center"><u>27</u></a></td><td align="center">28</td><td align="center"><u>29</u></a></td><td class="CalTodayDay" align="center"><u>30</u></a></td><td class="CalOtherMonthDay" align="center">1</td></tr><tr><td class="CalOtherMonthDay" align="center">2</td><td class="CalOtherMonthDay" align="center">3</td><td class="CalOtherMonthDay" align="center">4</td><td class="CalOtherMonthDay" align="center">5</td><td class="CalOtherMonthDay" align="center">6</td><td class="CalOtherMonthDay" align="center">7</td><td class="CalOtherMonthDay" align="center">8</td></tr>
</tbody></table></div>
<!--可能出错 暂时注销  by桑大亨
<script type="text/javascript">loadBlogDefaultCalendar();</script>
-->



			
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
