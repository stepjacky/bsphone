/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-1-19
 * Time: 下午5:04
 * To change this template use File | Settings | File Templates.
 */
$(function(){
   $("#where").bind("change",whereChange);
   $("#area").bind("change",areaChange);
   $("#branch_name").bind("change",branchChange);
});
var prefix='在 ';
var whereName = $("#where").find("option:selected").text();
var areaName=$("#area").find("option:selected").text();
var shopName=$("#branch_name").find("option:selected").text();
function whereChange(){
    var where = $("#where").val();
    if(where==1){
        $.get("/shoparea/find_all/json",function(data){
            $("#area").empty();
            var datas =  eval(data);
            $("#area").append(new Option('请选择区域'));
            $.each(datas,function(idx,item){
               // console.log(item);
               var opt = new Option(item.name,item.id);
                $("#area").append(opt);
            });
        });

    }else{
        areaName=shopName='';
        $("#area").val('');
        $('#branch_name').val('');
    }

    whereName = $("#where").find("option:selected").text();
}
function areaChange(){
    var area = $("#area").val();

        $.get("/shop/find_by_area/"+area+"/json",function(data){
            $("#branch_name").empty();
            $("#branch_name").append(new Option('请选择店面'));
            var datas =  eval(data);
            $.each(datas,function(idx,item){
                //console.log(item);
                var opt = new Option(item.name,item.id);
                $("#branch_name").append(opt);
            });
        });

    areaName = $("#area").find("option:selected").text();
}

function branchChange(){
    shopName = $("#branch_name").find("option:selected").text();
}

function add_sharedinfo(id,name){
    var defect = $("#use_cont_fault").val();
    var virtue = $("#use_cont").val();

    if(use_cont=='' || use_cont_fault=='') {
        alert('请填写有点和缺点');
        return;
    }
    var name= prefix +whereName+" "+areaName+" "+shopName+" 购买了 "+name;
    var data = "phone_id="+id+"&name="+name+"&virtue="+virtue+"&defect="+defect;
    $.post('/sharedinfo/saveUpdate',data,function(){
       alert('谢谢参与!');
    });
}