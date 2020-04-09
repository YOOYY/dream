var imgUrl = '/imgs/';

$(function () {
    $("#zh").click(function () {
        var href = location.pathname;
        href = href.replace('/lang/en', '');
        console.log(href);

        location.pathname = href;
    })
    $("#en").click(function () {
        var href = location.pathname,
            arr = href.split('/'),
            l = arr.length;
        for (var i = 0; i < l; i++) {
            if (!arr[i]) {
                arr.splice(i, 1);
            }
        }
        if (arr.length < 2) {
            for (var j = 0; j < 2; j++) {
                if (!arr[j]) {
                    arr[j] = 'index';
                }
            }
        }
        arr.push('lang', 'en');
        href = arr.join('/');
        console.log(arr);
        console.log(href);
        location.pathname = href;
    })
    $('.phone-nav').click(function () {
        $(this).children('ul').toggle();
    })
})

function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return "";
}