/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-11
 * Time: 下午9:49
 * To change this template use File | Settings | File Templates.
 */
function buynow(id){
    if(id=="" || id==null || id==undefined){
        return;
    }
}
$(function(){
    $("dl.dtnav dt span,dl.dtnav dt small").bind("click",toggleSpana);
    $(".bot5 strong,.bot5 small").bind("click",toggleSpana);

    $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 60,
        itemMargin: 2,
        minItems: 2,
        maxItems: 4
    });

    /*
    $('.jqzoom').jqzoom({
        zoomType: 'standard',
        lens:true,
        preloadImages: false,
        alwaysOn:false
    });
    */

});

function showImage(src){
    $("#main-img").attr("src",src);
    $(".jqzoom").attr("href",src);
}

function toggleSpana(){
    var $this = $(this);
    var cidx = $this.index();
    if(cidx==4){
        showTab(0);
        //if(window.location.href.indexOf('#')==-1)
        //window.location.href = window.location.href+"#hree";
        window.location.hash = "#hree";
        return;
    }
    showTab(cidx);
    toggleBackground(this);
    var pat = $this.parent().get(0);
    if(pat.tagName.toLowerCase()=="div"){
       var chd =  $("dl.dtnav dt").children()[cidx];
        toggleBackground(chd);
    }

    if(pat.tagName.toLowerCase()=='dt'){
        chd =  $(".bot5").children()[cidx];
        toggleBackground(chd);
    }
}

function toggleBackground(tobj){
    var $this = $(tobj);//.parent();
    $this.addClass("crumb");
    var sibs  = $this.siblings();
    $.each(sibs,function(index,item){
        $(item).removeClass("crumb");
    });



}

function showTab(idx){
    if(idx==4) return;
    var cnt =  $("dl.mobile_info").children("dd");
    var dd = null
    for(var i=0;i<cnt.length;i++){
        if(i!=idx){
            dd = cnt[i];
            $(dd).css("display",'none');
        }
    }

    dd = cnt[idx];
    $(dd).css("display","");




}

function post_comment(pid,cntid){
    var content = $("#"+cntid).val();
    var url = "/comment/add_for_phone/"+pid+"?ds"+new Date();
    $.post(url,"content="+content,function(){
       alert("感谢评论");
    });

}