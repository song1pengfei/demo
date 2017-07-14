//响应式导航
$(document).ready(function(){
        var pull  = $('#pull');
            menu  = $('ul.page');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        
        $(window).resize(function(){
            var w = $(this).width();

            if(w > 767 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });

        $('header ul.page li').on('click', function(e) {               
            var w = $(window).width();
            if(w < 767 ) {
                menu.slideToggle();
            }
        });
        
    });

//下拉菜单
$(document).ready(function(){
   $('li.categories').hover(function(){
       $('li.categories ul,this').stop().slideToggle();
  
   });
});

