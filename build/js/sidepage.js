// pageMe.js 使用方法
$("#page").paging({
    pageNum: 1, // 当前页面
    totalNum: 7, // 总页码
    totalList: 56, // 记录总数量
    callback: function (num) { //回调函数
        console.log(num);
    }
});