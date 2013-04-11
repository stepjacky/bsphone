/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-20
 * Time: 下午9:22
 * To change this template use File | Settings | File Templates.
 */

function feedback(vid,cntid){
    var url = '/comment/add_for_video/'+vid;
    var data = 'content='+$("#"+cntid).val();
    $.post(url,data,function(){
        alert('发表成功,谢谢参与!');
    });
}