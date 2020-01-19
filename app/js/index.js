var imgUrl = './imgs/';

$(function(){
    $('.phone-nav').click(function(){
        $(this).children('ul').toggle();
    })

    $('#mySlide').edslider({
        width: '100%',
        height: 'auto',
        position: 1,
        interval: 5000,
        duration: 500,
        animation: true,
        paginator: false,
        navigator: true,
        progress: false,
        loadImgSrc: imgUrl+'load.gif',
        skin: 'edslider'
    });
    // var slideBox = $("#lay");
    // var ul = $("#bannerlist");
    // $("#bannerlist").append($("#bannerlist").children().clone());
    // var number = slideBox.find("ul li");
    // var timer = null;
    // var sw = 0;        
    // //每个span绑定click事件，完成切换颜色和动画，以及读取参数值
    // number.on("click",function (){
    //     $(this).addClass("active").siblings("li").removeClass("active");
    //     sw = $(this).index();
    //     var oneWidth = ul.find("a").eq(0).width();

    //     ul.animate({
    //         "left":-oneWidth*sw
    //     });
    // });
    // //定时器的使用，自动开始
    // timer = setInterval(function (){
    //     sw++;
    //     if(sw == number.length){
    //         sw = 0;
    //     }
    //     number.eq(sw).trigger("click");
    // },2000);
    // //hover事件完成悬停和，左右图标的动画效果
    // slideBox.hover(function(){
    //     clearInterval(timer);
    // },function(){
    //     timer = setInterval(function (){
    //         sw++;
    //         if(sw == number.length){
    //             sw = 0;
    //         }
    //         number.eq(sw).trigger("click");
    //     },2000);
    // })
})