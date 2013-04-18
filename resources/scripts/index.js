/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 12-11-29
 * Time: 下午9:44
 * To change this template use File | Settings | File Templates.
 */
var smartTool = null;
$(function () {

    $(".brand").bind("mouseenter mousemove mouseover",showSmartBrands);
    $(".brand").bind("mouseleave mouseout",hideSmartBrands);
    new dk_slideplayer("#pub_slideplay", {width:"525px", height:"210px", fontsize:"12px", time:"5000"});
    $("dl.dtnav dt span").bind("click",toggleSpan);
    $("dl.tool_dd dt").bind("click",showSmartTool);
    $(document).bind('click',clickDoc);
    $(".picScroll-top").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:2,easing:"swing"});
    setInterval('shareScrollDown();' , 10000);

});


function shareScrollDown() {
    var fc = $('#sharelist').children(':first-child');
    fc.fadeOut("slow");
    var fcht = $("<p></p>").append(fc).html();
    $("#sharelist").append(fcht);


}
function showSmartBrands() {
    $("div.all").show();
}
function hideSmartBrands() {
    $("div.all").hide();
}
function toggleSpan(){
    $(this).addClass("crumb");
    var sibs  = $(this).siblings();
    $.each(sibs,function(index,item){
       $(item).removeClass("crumb");
    });
    var spanIdx = $(this).index();
    var dt =  $(this).parent();
    var dds =   dt.siblings("dd");
    $.each(dds,function(index,item){
       if(index==spanIdx){
           $(item).addClass("block");
       }else{
           $(item).removeClass("block");
       }

    });
}

function showSmartTool(event){

    smartTool  = $(this).siblings('dd');
    smartTool.fadeIn('slow');
    event.stopImmediatePropagation();

}

function clickDoc(event){
    if(smartTool)smartTool.fadeOut('slow');
}

function shareScrollDown2() {
    var ffli = $('#sharelist').children(':first-child');
    var dheight = ffli.attr('att');
    var lastli = $('#sharelist').children(':last-child');
    $('#sharelist').prepend( '<li att="'+lastli.attr('att')+'" style="display:none;height:0px;" >'
        +lastli.html()+'</li>' );
    ffli.animate({

    }, 1500 , function(){
        ffli.children().each(function(i){
            $(this).fadeIn(500);
        });
        $('#sharelist').children(':last-child').remove();
    });
}
