<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>编号</th>
        <th>图片</th>
        <th>链接</th>
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
                <?=val($id)?>

            </td>
            <td>
                <img src="<?=val($image)?>" width="100" height="100"/>

            </td>
            <td>
               <a href="<?=val($href)?>" target="_blank">
                   <?=val($href)?>

               </a>

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