<table class="table table-condensed table-hover table-bordered table-striped">
    <thead>
       <tr>
          <th>商品</th>
          <th>名称</th>
          <th>价格</th>
          <th>数量</th>
          <th>总额</th>


       </tr>


    </thead>

    <tbody>
    <?php foreach($beans as $bean):
       extract($bean);
    ?>
    <tr>
        <td>
           <a href="/phone/one/<?=$pdtid?>" class="btn" target="_blank">查看</a>

        </td>
        <td>
            <?=$pdtname?>

        </td>
        <td>
            <?=$pdtprice?>

        </td>
        <td>
            <?=$pdtcount?>

        </td>
        <td>
            <label class="label label-important">
            <?=$pdtcount*$pdtprice?>
            </label>
        </td>



    </tr>

    <?php endforeach;?>

  </tbody>

</table>