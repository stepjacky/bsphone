/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-2-4
 * Time: 下午2:46
 * To change this template use File | Settings | File Templates.
 */


$(function(){
 $(".datepicker").datepicker();
});

function saveBasic(){

    var data  =$("form#userinfo").serialize();

    $.post('/myuser/saveupdate',data);
}

function saveNewAddress(){
    var data = $("#addrform").serialize();

    $.post('/shipaddress/saveupdate',data,function(){
        window.location.href='/profile/index/basic';
    });
}

function setDefaultAddr(id){
    var data = "usedit=1&id="+id;
    $.post('/shipaddress/saveupdate',data);

}

function removeAddr(id){
    $.post('/shipaddress/remove/'+id);
}

function modifyAvatar(){
    var obj = new Object();
    var path =  window.showModalDialog('/avator/',obj,'');
    if(path == undefined) {
        path = window.returnValue;
    }
    $.post('/myuser/modify_avatar','avatar='+path);
}