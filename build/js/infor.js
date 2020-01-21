// pageMe.js 使用方法
$("#page").paging({
    pageNum: 1, // 当前页面
    totalNum: 7, // 总页码
    totalList: 56, // 记录总数量
    callback: function (num) { //回调函数
        console.log(num);
    }
});
function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return "";
}