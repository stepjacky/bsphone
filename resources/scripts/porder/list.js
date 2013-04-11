function newOne(){
  	var url="/porder/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/porder/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/porder/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}


function orderDetail(oid){
    $.get('/porderdetail/find_details/'+oid,function(html){
        $("#modal-body").html(html);
        $('#myModal').modal();
    })
}