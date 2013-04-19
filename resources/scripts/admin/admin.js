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