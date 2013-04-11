function newOne(){
  	var url="/shop/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/shop/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/shop/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}