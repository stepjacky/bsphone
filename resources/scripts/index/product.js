/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-6
 * Time: 下午8:53
 * To change this template use File | Settings | File Templates.
 */
$(function(){

});

function setTagSelect(name,val){
   $("div.opt p a["+name+"]").removeClass("crumb");
   $("div.opt p a["+name+"="+val+"]").addClass("crumb");

}
