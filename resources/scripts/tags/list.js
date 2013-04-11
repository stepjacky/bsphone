function newOne(){
  	var url="/tags/editNew/-1/name";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/tags/editNew/"+id+"/name";;
    window.showModalDialog(url,window);
}
function removeOne(id,catalog){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/tags/remove/"+id+"/"+catalog+"/name";;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}