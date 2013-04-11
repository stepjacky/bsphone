<table class="table  table-bordered table-hover">
    <thead>
    <tr>
        <th>选择</th>
        <th>名称</th>
        <th>管理</th>
    </tr>

    </thead>
    <tbody>
    <?php  foreach($list as $lst):?>

    <tr>


        <td>
            <input type="checkbox" value="<?=val($lst['id'])?>" class="check_spare"
                   onclick="checkspare(this.value,'<?=val($lst['name'])?>',this)" />
        </td>
        <td><?=val($lst['name'])?></td>
        <td>
            <a href="javascript:;" onclick="removeHot('<?=val($lst['id'])?>')">
                <i class="icon-remove-circle"></i>
            </a>


        </td>


    </tr>

        <?php endforeach;?>
    </tbody>
    <tfoot>
     <tr>
        <th colspan="3">

          <?=val($pagelink)?>
        </th>

     </tr>

    </tfoot>
</table>