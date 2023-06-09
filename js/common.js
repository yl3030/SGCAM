$(".header_search_toggle").click(function(){
    if($(window).width() >= 992){
        $(".header_search_form").toggleClass("active");
    }
})

$(".header_lang_active").click(function(){
    $(this).parents(".header_lang").toggleClass("active");
    $(this).parents(".header_lang").find(".header_lang_hide").slideToggle(300);
})
$(document).click(function (event) {
    if($(window).width() >= 992) {
        var lang = $(".header_lang");
        if (!lang.is(event.target) && lang.has(event.target).length === 0) {
            $(".header_lang").removeClass("active");
            $(".header_lang").find(".header_lang_hide").slideUp(300);
        }
    }
});

function navLink(){
    $(".header_link_nav_first>li>a").each(function(){
        let link = $(this).attr("data-link");
        if($(window).width() >= 992) {
            $(this).attr("href", link);
        }else {
            $(this).attr("href", "javascript:void(0)");
        }
    })
}
navLink();
$(window).on("resize scroll",function(){
    navLink();
})

$(".header_link_nav_first>li>a").click(function(){
    $(this).parents("li").toggleClass("active");
    $(this).parents("li").find(".header_link_nav_second").slideToggle(300);
})

$(".header_menu").click(function(){
    $(this).toggleClass("active");
    $(".header_link").toggleClass("active");
})