<div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
        <?php foreach($brands as $brand):?>
        <li><a href="javascript:;" data-toggle="tab" onclick="loadPhone('<?=val($brand['id'])?>',1)"><?=val($brand['name'])?></a></li>
        <?php endforeach;?>
    </ul>
    <div class="tab-content" id='phones'>

    </div>
</div>
<div id="selphones">

</div>
<script type="text/javascript">
    var phones = {};
    var selected = [];



    function loadPhone(brand,page){
        var url='/phone/find_by_brand/'+brand+"/"+page;
        $("#phones").load(url);
    }


    function checkphone(id,name,self){

        phones[id] = {'name':name,checked:$(self).attr('checked')};

        $("#selphones").empty();


        console.log(phones);
        $.each(phones,function(pid,item){
            var checked = item.checked;
            if(checked){
                var btn = $("<button class='btn' pid='"+pid+"'><i class='icon-remove-circle'></i></button>");
                btn.append(item.name);
                btn.bind('click',function(){
                    phones[pid] = undefined;
                    $(this).remove();
                });
                $("#selphones").append(btn);
            }
        });

        selected = [];
        $.each(phones,function(pid,item){
            var checked = item.checked;
            if(checked){
                selected.push(pid);
            }
        });


        window.returnValue = selected==null?'':selected;
    }
</script>