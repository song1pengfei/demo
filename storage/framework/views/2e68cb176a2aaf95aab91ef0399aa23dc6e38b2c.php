<!DOCTYPE html>
<!-- saved from url=(0024)https://www.cnblogs.com/ -->
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script async="" src="<?php echo e(asset('js/analytics.js')); ?>"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>博客园 - 开发者的网上家园</title>
    <meta name="keywords" content="开发者,博客园,开发者,程序猿,程序媛,极客,编程,代码,开源,IT网站,Developer,Programmer,Coder,Geek,技术社区">
    <meta name="description"
          content="博客园是一个面向开发者的知识分享社区。自创建以来，博客园一直致力并专注于为开发者打造一个纯净的技术交流社区，推动并帮助开发者通过互联网分享知识，从而让更多开发者从中受益。博客园的使命是帮助开发者用代码改变世界。">
    <link rel="shortcut icon" href="https://common.cnblogs.com/favicon.ico" type="image/x-icon">
    <link rel="Stylesheet" type="text/css" href="<?php echo e(asset('css/aggsite.css')); ?>">
    <link id="RSSLink" title="RSS" type="application/rss+xml" rel="alternate"
          href="http://feed.cnblogs.com/blog/sitehome/rss">
    <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/aggsite.js')); ?>" type="text/javascript"></script>
</head>
<body>


    <div id="wrapper">
        <div id="hd_info">
            <div id="cnts">
                <div id="site_nav_top">代码改变世界</div>
                <div id="login_area">

                    <span id="span_userinfo"> <?php if(session('User')): ?> <a href=""> <?php echo e(session('User')); ?></a>·<a id="user_nav_blog_link" href="">我的博客</a>·<a href="/home/logout">退出</a> <?php else: ?> [<a href="<?php echo e(URL('home/login')); ?>"> 登陆 </a>·<a href="<?php echo e(url('home/register')); ?>" onclick="register();return false">注册</a>]</span><?php endif; ?>

                </div>
                
                <div class="clear"></div>
                
            </div>
        </div> 

    </div> 
    <div id="header">
        <p class="h_r_3"></p>
        <p class="h_r_2"></p>
        <p class="h_r_1"></p>
        <div id="header_block">
            <div id="logo">
                <h1>
                    <a href="https://www.cnblogs.com/" title="开发者的网上家园"><img src="<?php echo e(asset('images/logo_small.gif')); ?>"
                                                                             alt="博客园Logo" width="142" height="55"></a>
                </h1>
            </div>

            <div class="clear">  </div>
        </div>
        <p class="h_r_1"></p>
        <p class="h_r_2"></p>
        <p class="h_r_3"></p>
    </div>
	
    <div id="nav_menu">
        <a href="https://home.cnblogs.com/">园子</a>
        <a href="https://wz.cnblogs.com/">收藏</a>
        <a href="http://kb.cnblogs.com/">知识库</a>
        <a href="http://zzk.cnblogs.com/">找找看</a>
    </div>
						
    <div id="main">
        <div class="post_nav_block_wrapper">
          
            <div class="clear"></div>
        </div>
        <div class="rss_link" id="rss_block">
            <span id="posts_refresh_tips"></span>
            <a id="posts_refresh" href="https://www.cnblogs.com/#" class="refresh" title="刷新博文列表" onclick="aggSite.loadCategoryPostList();return false">刷新</a> 
            <a  href="http://feed.cnblogs.com/blog/sitehome/rss">
            <img src="<?php echo e(asset('images/icon_rss.gif')); ?>" alt="点击订阅" style="position:relative;top:2px;" title="订阅博客园文章"></a>
        </div>
       


        <div id="pager_top" style="display:none"></div>
        <div id="post_list_tips" class="hide"></div>

        <div id="post_list">
              <?php $__currentLoopData = $art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post_item_body">
                    <h3><a class="titlelnk" href="" target="_blank"><?php echo e($v->title); ?></a></h3>
                    <p class="post_item_summary">
                        <a href="http://www.cnblogs.com/onepixel/" target="_blank">
                        <img width="48" height="48" class="pfs" src="<?php echo e(asset('images/20151205235751.png')); ?>" alt=""></a>
                        
                    </p>
                    
                    <div class="post_item_foot">
                        <a href="http://www.cnblogs.com/onepixel/" class="lightblue">作者:<?php echo e($v->author); ?></a>
                        发布于:<?php echo e($v->addtime); ?>

                        <span class="article_comment">
                        <a href="http://www.cnblogs.com/onepixel/p/7078617.html#commentform" title="" class="gray"></a></span>
                        <span class="article_view"></span>
					   

                        <span class="article_view"></span> 
					   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					   
					   <a href="<?php echo e(url('/home/discusstab')); ?>">评论</a>
					    

					   </div>
                </div>
                <div class="clear"></div>
            </div>
      

            

        </div>
        <script>editorPickStat();
        aggSite.user.getUserInfo();</script>
        <script type="text/javascript">
            var aggSiteModel = {
                "CategoryType": "SiteHome",
                "ParentCategoryId": 0,
                "CategoryId": 808,
                "PageIndex": 1,
                "TotalPostCount": 4000,
                "ItemListActionName": "PostList"
            };
        </script>
        <div id="pager_bottom">
            <div id="paging_block">
                <div class="pager"><a href="https://www.cnblogs.com/" class="p_1 current"
                                      onclick="aggSite.loadCategoryPostList(1,20);buildPaging(1);return false;">1</a><a
                        href="https://www.cnblogs.com/sitehome/p/2" class="p_2 middle"
                        onclick="aggSite.loadCategoryPostList(2,20);buildPaging(2);return false;">2</a><a
                        href="https://www.cnblogs.com/sitehome/p/3" class="p_3 middle"
                        onclick="aggSite.loadCategoryPostList(3,20);buildPaging(3);return false;">3</a><a
                        href="https://www.cnblogs.com/sitehome/p/4" class="p_4 middle"
                        onclick="aggSite.loadCategoryPostList(4,20);buildPaging(4);return false;">4</a><a
                        href="https://www.cnblogs.com/sitehome/p/5" class="p_5 middle"
                        onclick="aggSite.loadCategoryPostList(5,20);buildPaging(5);return false;">5</a><a
                        href="https://www.cnblogs.com/sitehome/p/6" class="p_6 middle"
                        onclick="aggSite.loadCategoryPostList(6,20);buildPaging(6);return false;">6</a><a
                        href="https://www.cnblogs.com/sitehome/p/7" class="p_7 middle"
                        onclick="aggSite.loadCategoryPostList(7,20);buildPaging(7);return false;">7</a><a
                        href="https://www.cnblogs.com/sitehome/p/8" class="p_8 middle"
                        onclick="aggSite.loadCategoryPostList(8,20);buildPaging(8);return false;">8</a><a
                        href="https://www.cnblogs.com/sitehome/p/9" class="p_9 middle"
                        onclick="aggSite.loadCategoryPostList(9,20);buildPaging(9);return false;">9</a><a
                        href="https://www.cnblogs.com/sitehome/p/10" class="p_10 middle"
                        onclick="aggSite.loadCategoryPostList(10,20);buildPaging(10);return false;">10</a><a
                        href="https://www.cnblogs.com/sitehome/p/11" class="p_11 middle"
                        onclick="aggSite.loadCategoryPostList(11,20);buildPaging(11);return false;">11</a><span
                        class="ellipsis">···</span><a href="https://www.cnblogs.com/sitehome/p/200" class="p_200 last"
                                                      onclick="aggSite.loadCategoryPostList(200,20);buildPaging(200);return false;">200</a><a
                        href="https://www.cnblogs.com/sitehome/p/2"
                        onclick="aggSite.loadCategoryPostList(2,20);buildPaging(2);return false;">Next &gt;</a></div>
            </div>
            <script type="text/javascript">var pagingBuider = {
                "OnlyLinkText": false,
                "TotalCount": 4000,
                "PageIndex": 1,
                "PageSize": 20,
                "ShowPageCount": 5,
                "SkipCount": 0,
                "UrlFormat": "/sitehome/p/{0}",
                "OnlickJsFunc": "aggSite.loadCategoryPostList()",
                "FirstPageLink": "/",
                "AjaxUrl": "/mvc/ToolkitPaging/load.aspx",
                "AjaxCallbak": null,
                "TopPagerId": "pager_top",
                "IsRenderScript": true
            };
            function buildPaging(pageIndex) {
                pagingBuider.PageIndex = pageIndex;
                $.ajax({
                    url: pagingBuider.AjaxUrl,
                    data: JSON.stringify(pagingBuider),
                    type: 'post',
                    dataType: 'text',
                    contentType: 'application/json; charset=utf-8',
                    success: function (data) {
                        $('#paging_block').html(data);
                        var pagerTop = $('#pager_top');
                        if (pageIndex > 1) {
                            $(pagerTop).html(data).show();
                        } else {
                            $(pagerTop).hide();
                        }
                    }
                });
            }</script>
        </div>
        
        
        <div id="side_nav">

            <div id="cate_title_block">
                <div id="cate_title_title">
                    <div class="cate_title">网站分类</div>
                </div>
                <ul id="cate_item">
                    <li id="cate_item_108698" onmouseover="cateShow(108698)" onmouseout="cateHidden(108698)">
                        <a href="">.NET技术(5)</a>
                    </li>
                    <li id="cate_item_2" onmouseover="cateShow(2)" onmouseout="cateHidden(2)">
                        <a href="">编程语言(11)</a>
                    </li>
                    <li id="cate_item_108701" onmouseover="cateShow(108701)" onmouseout="cateHidden(108701)">
                        <a href=" ">软件设计(2)</a>
                    </li>
                    <li id="cate_item_108703" onmouseover="cateShow(108703)" onmouseout="cateHidden(108703)">
                        <a href="">Web前端(9)</a>
                    </li>
                    <li id="cate_item_108704" onmouseover="cateShow(108704)" onmouseout="cateHidden(108704)">
                        <a href="">企业信息化(0)</a>
                    </li>
                    <li id="cate_item_108705" onmouseover="cateShow(108705)" onmouseout="cateHidden(108705)">
                        <a href=" ">手机开发(3)</a>
                    </li>
                    <li id="cate_item_108709" onmouseover="cateShow(108709)" onmouseout="cateHidden(108709)">
                        <a href="">软件工程(0)</a>
                    </li>
                    <li id="cate_item_108712" onmouseover="cateShow(108712)" onmouseout="cateHidden(108712)">
                        <a href="">数据库技术(2)</a>
                    </li>
                    <li id="cate_item_108724" onmouseover="cateShow(108724)" onmouseout="cateHidden(108724)">
                        <a href="">操作系统(1)</a>
                    </li>
                  
                </ul>
                <div class="cate_bottom"></div>
                <div id="cate_sub_block">
                    <div id="cate_content_block_108698" onmouseover="cateShow(108698)" onmouseout="cateHidden(108698)"
                         class="cate_content_block_wrapper" style="top:30px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href=" ">.NET新手区(1)</a></li>
                                <li><a href="">ASP.NET(0)</a></li>
                                <li><a href="">C#(2)</a></li>
                                <li><a href=" ">.NET Core(0)</a></li>
                                <li><a href="">WinForm(0)</a></li>
                                <li><a href="">Silverlight(0)</a></li>
                                <li><a href="">WCF(0)</a></li>
                                <li><a href="">CLR(0)</a></li>
                                <li><a href="">WPF(0)</a></li>
                                <li><a href="">XNA(0)</a></li>
                                <li><a href="">Visual Studio(0)</a></li>
                                <li><a href="">ASP.NET MVC(0)</a></li>
                                <li><a href="">控件开发(0)</a></li>
                                <li><a href="">Entity Framework(0)</a></li>
                                <li><a href="">NHibernate(1)</a></li>
                                <li><a href="">WinRT/Metro(1)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_2" onmouseover="cateShow(2)" onmouseout="cateHidden(2)"
                         class="cate_content_block_wrapper" style="top:58px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">Java(0)</a></li>
                                <li><a href="">C++(0)</a></li>
                                <li><a href="">PHP(0)</a></li>
                                <li><a href="">Delphi(0)</a></li>
                                <li><a href="">Python(0)</a></li>
                                <li><a href="">Ruby(0)</a></li>
                                <li><a href="">C语言(0)</a></li>
                                <li><a href="">Erlang(0)</a></li>
                                <li><a href="">Go(0)</a></li>
                                <li><a href="">Swift(0)</a></li>
                                <li><a href="">Scala(0)</a></li>
                                <li><a href="">R语言(0)</a></li>
                                <li><a href="">Verilog(0)</a></li>
                                <li><a href="">其它语言(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108701" onmouseover="cateShow(108701)" onmouseout="cateHidden(108701)"
                         class="cate_content_block_wrapper" style="top:86px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">架构设计(0)</a></li>
                                <li><a href="">面向对象(0)</a></li>
                                <li><a href="">设计模式(0)</a></li>
                                <li><a href="">领域驱动设计(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108703" onmouseover="cateShow(108703)" onmouseout="cateHidden(108703)"
                         class="cate_content_block_wrapper" style="top:114px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">Html/Css(3)</a></li>
                                <li><a href="">JavaScript(6)</a></li>
                                <li><a href="">jQuery(0)</a></li>
                                <li><a href="">HTML5(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108704" onmouseover="cateShow(108704)" onmouseout="cateHidden(108704)"
                         class="cate_content_block_wrapper" style="top:142px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">BPM(0)</a></li>
                                <li><a href="">SharePoint(0)</a></li>
                                <li><a href="">GIS技术(0)</a></li>
                                <li><a href="">SAP(0)</a></li>
                                <li><a href="">Oracle ERP(0)</a></li>
                                <li><a href="">Dynamics CRM(0)</a></li>
                                <li><a href="">信息安全(0)</a></li>
                                <li><a href="">企业信息化其他(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108705" onmouseover="cateShow(108705)" onmouseout="cateHidden(108705)"
                         class="cate_content_block_wrapper" style="top:170px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">Android开发(1)</a></li>
                                <li><a href="">iOS开发(2)</a></li>
                                <li><a href="">Windows Phone(0)</a></li>
                                <li><a href="">Windows Mobile(0)</a></li>
                                <li><a href="">其他手机开发(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108709" onmouseover="cateShow(108709)" onmouseout="cateHidden(108709)"
                         class="cate_content_block_wrapper" style="top:198px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">敏捷开发(0)</a></li>
                                <li><a href="">项目与团队管理(0)</a></li>
                                <li><a href="">软件工程其他(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108712" onmouseover="cateShow(108712)" onmouseout="cateHidden(108712)"
                         class="cate_content_block_wrapper" style="top:226px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">SQL Server(0)</a></li>
                                <li><a href="">Oracle(2)</a></li>
                                <li><a href="">MySQL(0)</a></li>
                                <li><a href="">NoSQL(0)</a></li>
                                <li><a href="">大数据(0)</a></li>
                                <li><a href="">其它数据库(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108724" onmouseover="cateShow(108724)" onmouseout="cateHidden(108724)"
                         class="cate_content_block_wrapper" style="top:254px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="">Windows(0)</a></li>
                                <li><a href="">Windows Server(0)</a></li>
                                <li><a href="">Linux(1)</a></li>
                                <li><a href="">OS X(0)</a></li>
                                <li><a href="">嵌入式(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    
                </div>
                <script type="text/javascript">var cateIdList = '108698,2,108701,108703,108704,108705,108709,108712,108724,4';
                aggSite.loadSubCategories();</script>
            </div>       
        </div>
        
        
        
        <div id="side_right">
            <div id="search_block">
                <div class="side_search">
                    <input type="text" id="zzk_q" class="search_input" onkeydown="return zzk_go_enter(event);"
                           tabindex="3"><input onclick="zzk_go()" type="button" class="search_btn" value="找找看">
                </div>
                <div id="google_search" class="side_search">
                    <input type="text" id="google_search_q" class="search_input"
                           onkeydown="return google_search_enter(event);"><input type="button" value="Google"
                                                                                 class="search_btn"
                                                                                 onclick="return google_search();">
                </div>
            </div>

        </div>
                    
 
    
    <div id="footer">
        <div class="footer_block">
            <p class="r_b_3"></p>
            <p class="r_b_2"></p>
            <p class="r_b_1"></p>
           
            <p class="r_b_1"></p>
            <p class="r_b_2"></p>
            <p class="r_b_3"></p>
        </div>
    </div>
    <div id="footer_bottom">
        <div><a href="https://www.cnblogs.com/AboutUS.aspx">关于博客园</a><a href="https://www.cnblogs.com/ContactUs.aspx">联系我们</a>©2004-2017<a
                href="http://www.cnblogs.com/">博客园</a>保留所有权利<a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备09004260号</a>
        </div>
        <div>
            <a href="https://ss.knet.cn/verifyseal.dll?sn=e131108110100433392itm000000&amp;ct=df&amp;a=1&amp;pa=0.25787803245785335"
               rel="nofollow" target="_blank" >
                <img id="cnnic_img" src="<?php echo e(asset('images/cnnic.png')); ?>" alt="" width="64" height="23"></a>
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502001144" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                <img src="<?php echo e(asset('images/ghs.png')); ?>" alt=""><span style="float:left;height:20px;line-height:20px;margin: 0 5px 0 5px; color:#939393;">沪公网安备 31011502001144号</span></a>
        </div>
    </div>
</div>
</body>
</html>