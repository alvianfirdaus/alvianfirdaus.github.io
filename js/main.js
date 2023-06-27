$(document).ready(function () {
    //BANNER POPUP
    $(".bannerpop--box__close").click(function () {
        $(this).parents("#bannerpop").hide();
    }),

    //LIVECHAT MOBILE
    $(".live__chatTitleMobile").click(function () {
        $(".live__chatFill").css("display","flex");
        $(".live__chatInput").css("display","block");
        $(".live__chatTitleMobile").css("display","flex");
        $(".live__chatIconDown").css("display","none");
        $(".live__chatIconRight").css("display","block");
    });

    $(".live__chatIconDown").click(function () {
        $(".live__chatFill").css("display","flex");
        $(".live__chatInput").css("display","block");
        $(".live__chatTitleMobile").css("display","flex");
        $(".live__chatIconRight").css("display","block");
        $(this).css("display","none");
    });

    $(".live__chatIconRight").click(function () {       
        $(".live__chatFill").css("display","none");
        $(".live__chatInput").css("display","none");
        $(".live__chatIconDown").css("display","block");
        $(this).css("display","none");
    });    
        
    $(".btn-se").click(function (e) {
        e.preventDefault(), 
        e.stopPropagation(), 
        $(".inputan-search").toggle(), 
        $(".pos-search").focus();
    });

    $(".header__search").click(function () {
        $(".inputan-search-mobile").toggle("fast");
    });

    $("#open-nav").click(function () {
        $("#mob-nav-menu").show("fast"), 
        $(".circle").css("transform", "scale(7)");
    });

    $("#close-nav").click(function () {
        $("#mob-nav-menu").hide("fast"), 
        $(".circle").css("transform", "scale(0.5)");
    });
    
    $(".programs__box").click(function(){
        $(".programs__box").removeClass("programs__box--active")
        $(this).toggleClass("programs__box--active");
    });
   
    $(".logoProfile").click(function (e) {
        e.preventDefault(), 
        e.stopPropagation(), 
        $(this).next(".logoProfile__box").toggle();
    })

    $(".livesticky__close").click(function(){
        $(this).parents(".livesticky__wrapper").css("display","none");
    });
    
    $(".schedule__stickyLiveClose").click(function(){
        $(this).parents(".schedule__stickyLive").css("display","none");
    });

    //Schedule 
    $(".schedule__linkClick").click(function(){
        $(".schedule__linkSubmenu").toggle();
    });
});