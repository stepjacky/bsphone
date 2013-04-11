/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 12-11-25
 * Time: 下午4:03
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    $("a.tab-menuitem").bind("click",showItemPage);
    ajaxSetting();
})
function showItemPage(){
    var mainPanel = $("#main-panel");
    var url = $(this).attr("url");
    $.get(url,function(page){
        mainPanel.html(page);
    });
}


function copyToClipboard(txt) {
    if(window.clipboardData) {
        window.clipboardData.clearData();
        window.clipboardData.setData("Text", txt);
    } else if(navigator.userAgent.indexOf("Opera") != -1) {
        window.location = txt;
    } else if (window.netscape) {
        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
        } catch (e) {
            alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'");
        }
        var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
        if (!clip)
            return;
        var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
        if (!trans)
            return;
        trans.addDataFlavor('text/unicode');
        var str = new Object();
        var len = new Object();
        var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
        var copytext = txt;
        str.data = copytext;
        trans.setTransferData("text/unicode",str,copytext.length*2);
        var clipid = Components.interfaces.nsIClipboard;
        if (!clip)
            return false;
        clip.setData(trans,null,clipid.kGlobalClipboard);
        alert("复制成功！")
    }
}

function ajaxSetting(){
    $.ajaxSetup({
        cache : false
    });// ajax调用不使用缓存
    $(document).ajaxStart(function() {
        $.blockUI({
            "message" : "<img src='/resources/images/loading.gif' />正在处理......",
            //"centerY": 0,
            "css": {
                "border":"none",
                "width":"200px",
                "height":"40px",
                "backgroundColor":"transparent",
                padding: '15px',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#000'
            },
            "overlayCSS":  {
                "backgroundColor": 'transparent',
                "opacity":         0.2
            }
        });

    });
    $(document).ajaxSuccess(function() {
        $.unblockUI();
    });
    $(document).ajaxStop(function() {
        $.unblockUI();
    });
    $(document).ajaxError(function() {
        $.unblockUI();
    });

}