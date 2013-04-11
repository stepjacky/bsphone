$(function(){
   $("#list").tableDnD({
       serializeParamName:'sort',
       onDrop:function(table,row){
           var data = $('#list').tableDnDSerialize();
           data  =  $.tableDnD.serialize();
           console.log(data);
           $.post('/brand/sorted',data,function(html){
                console.log(html);
           })

       }
   });
})


function newOne(){
  	var url="/brand/editNew/-1";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/brand/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/brand/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}
