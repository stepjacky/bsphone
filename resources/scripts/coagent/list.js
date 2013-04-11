function newOne(){
  	var url="/coagent/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/coagent/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = getEventSource();
    var url="/coagent/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}

function homedIt(id){
    var tgt = getEventSource();
    var home=0;
    if($(tgt).attr('checked')){
        home=1;
    }


    $.post('/coagent/saveupdate','id='+id+"&home="+home);

}