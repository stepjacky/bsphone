var setting = {
    view: {
        dblClickExpand: false
    },
    data: {
        simpleData: {
            enable: true
        }
    },
    callback: {
        onClick: onClick
    }
};
var ztree;
var zNodes =treeSource;

function onClick(e, treeId, treeNode) {

    $("#sparetype").val(treeNode.id);
    $("#stype").val(treeNode.name);
    hideMenu();
}

function showZtree(id) {
    var cityObj = $("#"+id);
    var cityOffset = cityObj.offset();
    $("#menuContent").css({
        left:cityOffset.left + "px",
        top:cityOffset.top + cityObj.outerHeight() + "px"
    }).slideDown("fast");
    $("#menuContent").width(cityObj.width());
    $("body").bind("mousedown", onBodyDown);
}
function hideMenu() {
    $("#menuContent").fadeOut("fast");
    $("body").unbind("mousedown", onBodyDown);
}
function onBodyDown(event) {
    if (!(event.target.id == "menuBtn" || event.target.id == "menuContent" || $(event.target).parents("#menuContent").length>0)) {
        hideMenu();
    }
}

$(function(){
	$("#saveBtn").bind("click",saveData);
	$('.datepicker').datepicker();
    ztree = $.fn.zTree.init($("#stypeTree"), setting, zNodes);
});
function saveData(){
    var sform = document.getElementById("spareform");
    sform.action = "/spare/saveupdate";
    sform.enctype="multipart/form-data";
    sform.target="dataFrame";
    sform.submit();
}


