$(function(){
    $('ul li').click(function(){
        var index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.content>div').eq(index).show().siblings().hide();
    })
    $('ul li').eq(0).click();
})