$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();

});
function saveData(){
    var sform = document.getElementById("tagsform");
    sform.action = "/tags/saveupdate/name";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}