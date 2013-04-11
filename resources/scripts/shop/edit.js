$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();

});
function saveData(){
    var sform = document.getElementById("shopform");
    sform.action = "/shop/saveupdate";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}