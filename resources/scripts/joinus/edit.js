var setting = {
    view: {
        showLine: true,
        showIcon: true,
        selectedMulti: false,
        dblClickExpand: false,
        addDiyDom: addDiyDom
    },
    data: {
        simpleData: {
            enable: true
        }
    },
    callback: {
        beforeClick: beforeClick,
        onClick: onClick
    }
};

var zNodes =[
    { id:0,name:"加盟合作设置" ,nodata:true},
    { id:"index",pId:0, name:"加盟首页"},
    { id:"a",    pId:0, name:"加盟介绍" ,nodata:true},
    { id:"brand", pId:"a", name:"加盟介绍"},
    { id:"advantage", pId:"a", name:"加盟优势"},
    { id:"desc", pId:"a", name:"增值意义"},
    { id:"winning", pId:"a", name:"统一致胜"},
    { id:"b", pId:0, name:"加盟须知" ,nodata:true},
    { id:"project", pId:"b", name:"加盟须知"},
    { id:"process", pId:"b", name:"加盟流程"},
    { id:"cost", pId:0, name:"加盟费用"},
    { id:"brandshow", pId:0, name:"品牌形象"},
    { id:"new", pId:0, name:"最新分店"},
    { id:"active", pId:"new", name:"加盟动态"},
    { id:"question", pId:0, name:"常见问题"},
    { id:"contact", pId:0, name:"联系我们"}
];

function addDiyDom(treeId, treeNode) {
    var spaceWidth = 5;
    var switchObj = $("#" + treeNode.tId + "_switch"),
        icoObj = $("#" + treeNode.tId + "_ico");
    switchObj.remove();
    icoObj.before(switchObj);

    if (treeNode.level > 1) {
        var spaceStr = "<span style='display: inline-block;width:" + (spaceWidth * treeNode.level)+ "px'></span>";
        switchObj.before(spaceStr);
    }
}

function beforeClick(treeId, treeNode) {
    /*if (treeNode.level == 0 ) {
     var zTree = $.fn.zTree.getZTreeObj("treeDemo");
     zTree.expandNode(treeNode);
     return false;
     }*/
    return true;
}

function onClick(event, treeId, treeNode, clickFlag){

    if($(treeNode).attr("nodata"))return;
    var url="/joinus/show/"+treeNode.id;

    $("#mainArea").load(url);
}
function showEdit(id){
    var url="/joinus/one/"+id;
    window.showModalDialog(url,window);
}

function initTree(){
    var treeObj = $("#jtree");
    var tree = $.fn.zTree.init(treeObj, setting, zNodes);
    treeObj.addClass("showIcon");
    var root = tree.getNodes()[0];
    tree.expandNode(root,true,true,true);
}
$(function(){
    initTree();
});