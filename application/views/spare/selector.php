<script type="text/javascript">
    var phones = {};
    var selected = [];

</script>

<div style="margin-bottom: 18px;" class="tabbable">
<ul class="nav nav-tabs">
    <?php foreach($sprs as $spr):?>

    <li class="dropdown">
        <a class="dropdown-toggle"
           data-toggle="dropdown"
           href="javascript:;"
           onclick="load_spares('<?=val($spr['id'])?>')"
                >
            <?=val($spr['name'])?>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <?php foreach($spr['children'] as $cspr):?>
            <li>
                <a href="javascript:;" onclick="load_spares('<?=val($cspr['id'])?>')">
                    <?=val(val($cspr['name']))?>
                </a>

            </li>
            <?php endforeach;?>
        </ul>
    </li>

    <?php endforeach;?>


</ul>
<div style="padding-bottom: 9px; border-bottom: 1px solid #ddd;" class="tab-content">
    <div id="sparetab" class="tab-pane active">
        <p>请点击品牌选择配件</p>
    </div>
</div>
</div>
<div id="selphones"></div>
<script type="text/javascript">
    function load_spares(tid){
        var url='/spare/by_type_paged/'+tid;
        $("#sparetab").load(url);

    }

    function checkspare(id,name,self){

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