function newOne(){
  	var url="/sparetype/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/sparetype/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/sparetype/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}