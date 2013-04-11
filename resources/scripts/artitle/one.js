/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-19
 * Time: 上午9:54
 * To change this template use File | Settings | File Templates.
 */

function feedback(aid,cntid){
    var content = $("#"+cntid).val();
    var url="/comment/add_for_artitle/"+aid+"?ds="+new Date();
    $.post(url,"content="+content,function(){
        alert('评论成功，谢谢参与');
    });
}
