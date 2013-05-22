/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-6
 * Time: 下午8:53
 * To change this template use File | Settings | File Templates.
 */
$(function(){
    $(window).scroll(function(){
        var bodyTop = 0;
        if (typeof window.pageYOffset != 'undefined') {
            bodyTop = window.pageYOffset;
        } else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
            bodyTop = document.documentElement.scrollTop;
        } else if (typeof document.body != 'undefined') {
            bodyTop = document.body.scrollTop;
        }
        var scrollpos = bodyTop + document.documentElement.clientHeight - 400;
        $("#basket").css("top", scrollpos);
    });
});

function setTagSelect(name,val){
   $("div.opt p a["+name+"]").removeClass("crumb");
   $("div.opt p a["+name+"="+val+"]").addClass("crumb");

}
