$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();

});
function saveData(){
    var sform = document.getElementById("trendsform");
    sform.action = "/trends/saveupdate";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}