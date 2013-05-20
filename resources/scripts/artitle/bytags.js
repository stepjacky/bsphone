/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-20
 * Time: 上午12:32
 * To change this template use File | Settings | File Templates.
 */
$(function(){
    var $this =  $("a.artitle-tag-"+tidx).parent('li');
    var $sibs = $this.siblings('li');
    $.each($sibs,function(idx,item){
       $(item).removeClass('crumb');
    });
    $this.addClass('crumb');


    $(".new_nav li[class !='crumb']").mouseover(function(){$(this).addClass("crumb")}).mouseout(function(){$(this).removeClass('crumb')});
    if($.browser.msie && parseInt($.browser.version) <= 6){ //IE6
        $(window).scroll(function(){
            var t1 = $(document).scrollTop()-480;
            var t2 = $(".new_l").height()-520;
            $(".new_nav").css("top",t1);
            if(t1 < 0){
                $(".new_nav").css("top","0px");
            }else if(t1 > t2){
                $(".new_nav").css("top",t2);
            }
        });
    }else{
        var scrtop = $("#new_l").offset().top;
        $(window).scroll(function(){
            if($(window).scrollTop() > scrtop){
                if($('.new_nav').css('position') == 'absolute'){
                    $('.new_nav').css({'position':'fixed','left':'auto'});
                }
            }else{
                if($('.new_nav').css('position') == 'fixed'){
                    $('.new_nav').css({'position':'absolute','left':'0'});
                }
            }
        });
    }



});

