function newOne(){
  	var url="/phoneos/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/phoneos/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/phoneos/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}