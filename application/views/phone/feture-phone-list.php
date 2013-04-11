<table class="table  table-bordered table-hover">
    <thead>
    <tr>

        <th>名称</th>
        <th>删除</th>
    </tr>

    </thead>
    <tbody>
    <?php foreach($beans as $lst): ?>
    <tr>

        <td>
            <?=val($lst['name'])?>
        </td>

        <td>

          <button  class="btn btn-danger" onclick="removeFeture('<?=$lst['id']?>')" >
             <i class="icon-remove"></i>

          </button>
        </td>

    </tr>

        <?php endforeach;?>
    </tbody>
</table>
<script type="text/javascript">
    var ptype='<?=$ptype?>';
    function removeFeture(id){
        $.post('/phone/remove_feture/'+ptype+'/'+id,function(){

        })
    }

</script>