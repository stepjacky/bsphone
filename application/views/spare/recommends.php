<table class="table  table-bordered table-hover">
    <thead>
    <tr>

        <th>名称</th>
        <th>管理</th>

    </tr>

    </thead>
    <tbody>
    <?php  foreach($beans as $lst):?>

       <tr>

         <td><?=val($lst['name'])?></td>
         <td>
             <button class="btn btn-danger" onclick="removeFeture('<?=val($lst['id'])?>')">
                 <i class="icon-remove-circle"></i>
             </button>


         </td>


       </tr>

    <?php endforeach;?>
    </tbody>
</table>
<script type="text/javascript">
    var stype='<?=$stype?>';
    function removeFeture(id){
        $.post('/spare/remove_feture/'+stype+'/'+id,function(){

        });
    }
</script>