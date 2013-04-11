<table class="table table-bordered table-hover">
<thead>
<tr>

    <th>名称</th>
    <th>管理</th>
</tr>

</thead>
<tbody>
<?php foreach($beans as $bean):?>
<tr>

    <td>

        <?=val($bean['name'])?>

    </td>
    <td>
        <button class="btn btn-danger" onclick="removeFeture('<?=val($bean['id'])?>')">
            <i class="icon-remove-circle"></i>
        </button>


    </td>

</tr>

    <?php endforeach;?>
</tbody>

</table>
<script type="text/javascript">
    var stype='<?=$stype?>';
    var homed = <?=$home?'true':'false'?>;
    function removeFeture(id){
        $.post('/spare/remove_feture/'+stype+'/'+id+'/'+homed,function(){

        });
    }
</script>