$(document).ready(function(){
    $(".tabs").lightTabs();
    $("a#call-link").fancybox({
        minWidth:413
    });
     $('.post-b').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 100
    })
    $('.post-b').find('.item:nth-child(2n)').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRightBig',
        offset: 100
    })
        $('.post-b').find('.item:nth-child(2n-1)').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeftBig',
        offset: 100
    })
    $('.post-a').find('.block-top').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    })
    $('.post-a').find('.block-bot').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    })
    $('.post-g').find('.goods-title>p').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
    })
    $('.post-g').find('.tabs').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
    })
    // $('.post-g').find('.item').addClass("hidden").viewportChecker({
    //     classToAdd: 'visible animated fadeIn',
    //     offset: 100
    // })
    setTimeout(function(){

    $('.post-l').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRightBig',
        offset: 100
    })
    $('.post-r').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeftBig',
        offset: 100
    })
},1)
});
(function($){				
    jQuery.fn.lightTabs = function(options){

        var createTabs = function(){
            tabs = this;
            i = 0;
            
            showPage = function(i){
                $(tabs).children("div").children("div").fadeOut(100);
                $(tabs).children("div").children("div").eq(i).fadeIn(400);
                $(tabs).children("ul").children("li").removeClass("active");
                $(tabs).children("ul").children("li").eq(i).addClass("active");
            }
                                
            showPage(0);				
            
            $(tabs).children("ul").children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;                        
            });
            
            $(tabs).children("ul").children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });				
        };		
        return this.each(createTabs);
    };	
})(jQuery);