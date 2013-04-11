<table class="table  table-bordered table-hover">
    <thead>
     <tr>
        <th>名称</th>
        <th>发布日期</th>
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

          </tr>

        <?php endforeach;?>
    </tbody>

</table>