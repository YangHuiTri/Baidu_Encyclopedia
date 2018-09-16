
//解释一下
/**
 * $(this)是指鼠标点击的位置
 * scoll鼠标滚动的位置
 *
 */
$(this).scroll(function(){
    //能看到的高度
    var viewHeight =$(this).height();
    //页面的实际高度
    var contentHeight =$(".container").get(0).scrollHeight;
    //滚动的高度,所谓滚动的高度是不包括我们看到的最后被滚动到页面高度
    var scrollHeight =$(this).scrollTop();
    if(contentHeight - viewHeight < scrollHeight) {
        $("#回到底部").show();
    }else{
        $("#回到底部").hide();
    }
});