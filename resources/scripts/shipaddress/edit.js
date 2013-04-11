$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();

});
function saveData(){
    var sform = document.getElementById("shipaddressform");
    sform.action = "/shipaddress/saveupdate";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}