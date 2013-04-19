$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();

});
function saveData(){
    var sform = document.getElementById("sparetypeform");
    sform.action = "/sparetype/saveupdate";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}

function setRooted(self,did){
    $("#"+did).attr("disabled",self.checked);
}


function setPicture(self){
    var ps = window.showModalDialog('/picture/selector');
    if(ps==null || ps=='' || ps==undefined) return;
    $(self).val(ps);
    $(self).siblings('img').attr('src',ps);
}