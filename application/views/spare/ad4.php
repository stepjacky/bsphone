<table class="table table-bordered table-hover">
    <thead>
    <tr>

        <th>名称</th>
    </tr>

    </thead>
    <tbody>
    <?php foreach($beans as $bean):?>
    <tr>

        <td>

            <?=val($bean['name'])?>

        </td>


    </tr>

        <?php endforeach;?>
    </tbody>

</table>