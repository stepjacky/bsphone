<link href="/resources/styles/help.css" rel="stylesheet" media="screen" />
<div id="content">
<div class="location">
    <small></small>
    <strong><a href="/welcome/">网站首页</a>&gt;发货查询</strong>
    <span class="location_l"></span><span class="location_r"></span>
</div>
<div class="layoutdiv">
<h2 class="help_title"><img src="/resources/images/index/title40.gif" alt=""></h2>
<div class="bor4">
<div class="help_content">
<div class="round">
<div class="round_bor">
   <?php
      $dates =  array_keys($beans);
      foreach($dates as $dkey):
         $list = $beans[$dkey];
    ?>
          <h2>[<?=$dkey?>]</h2>
          <table>
              <tbody><tr>
                  <th >收件人</th>
                  <th >收件地址</th>
                  <th>物流公司</th>
                  <th>发货单号</th>
              </tr>

              <?php foreach($list as $bean):
                  extract($bean);

              ?>

              <tr>
                  <td>
                    <?=substr_replace($username,'*',3,3);?>
                  </td>
                  <td><?=$address;?></td>
                  <td><?=$Logistics?></td>
                  <td><em><?=$shipnumber?></em></a></td>
              </tr>
              <?php endforeach;?>
              </tbody></table>



    <?php endforeach;?>




</div>
</div>
</div>
</div>
<div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>

</div>