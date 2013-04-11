<table class="table table-bordered table-hover">
    <caption>上面广告位</caption>
    <thead>
    <tr>

        <th>名称</th>

    </tr>

    </thead>
    <tbody>
    <?php foreach($topad2 as $bean):?>
    <tr>

        <td>

            <?=val($bean['name'])?>

        </td>




    </tr>

        <?php endforeach;?>
    </tbody>

</table>

<table class="table table-bordered table-hover">
    <caption>下面广告位</caption>
    <thead>
    <tr>

        <th>名称</th>


    </tr>

    </thead>
    <tbody>
    <?php foreach($bottomad2 as $bean):?>
    <tr>

        <td>

            <?=val($bean['name'])?>

        </td>

    </tr>

        <?php endforeach;?>
    </tbody>

</table>