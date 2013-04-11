<table class="table  table-bordered table-hover">
    <thead>
     <tr>
        <th>名称</th>
        <th>发布日期</th>
        <th>管理</th>
     </tr>
    </thead>
    <tbody>
        <?php foreach($beans as $bean):?>
        <?php
            extract($bean);
            ?>

        <tr>

             <td>
                <?=val($name)?>

             </td>
             <td>
                 <?=val($firedate)?>

             </td>
             <td>
                <button class='btn btn-danger' onclick="removeHome('<?=$bean['id']?>');">
                   <i class="icon-remove-sign"></i>

                </button>

             </td>
          </tr>

        <?php endforeach;?>
    </tbody>

</table>
<script type="text/javascript">
    function removeHome(id){
        $.post('/artitle/remove_home_artitle/'+id,function(){

        });

    }

</script>