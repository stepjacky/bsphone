function newOne(){
  	var url="/video/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/video/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/video/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}

function setPicture(pname,id){
    var ps = window.showModalDialog('/picture/selector');

    var url = '/video/update_picture/'+pname+'/'+id ;

    $.post(url,'path='+ps,function(){
        alert('配图更新完毕!');
    })
}