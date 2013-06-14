<link  href="/resources/styles/help.css" rel='stylesheet' type="text/css"   />
<div id="content">
<div class="location">
    <small></small>
    <strong><a href="/">网站首页</a>&gt;BE数码通讯</strong>
    <span class="location_l"></span><span class="location_r"></span>
</div>
<div class="layoutdiv">
<h2 class="help_title"><img src="/resources/images/index/title30.gif" alt=""></h2>
<div class="help_bor">
<div class="help_l">
    <?php while($key = key($menu)) {
          $list = $menu[$key];

    ?>
<dl id="v_0">
    <dt class="title"><?=val($key)?></dt>
    <dd>

       <?php foreach($list as $lst):

        extract($lst);

        ?>
        <ul>
            <li>
                <a href="/welcome/servicecenter/<?=$id?>/s" title="点击查看<?=$name?>的更详细内容！"><?=$name?></a>
            </li>
        </ul>
        <?php endforeach;?>
    </dd>
</dl>
<?php
  next($menu);
} ?>

 <dl>
    <dt class="title">客服中心</dt>
     <dd>

         <?php foreach($smenu as $lst):

         extract($lst);

         ?>
         <ul>
             <li>
                 <a href="/welcome/servicecenter/<?=$id?>/c" title="点击查看<?=$name?>的更详细内容！"><?=$name?></a>
             </li>
         </ul>
         <?php endforeach;?>
     </dd>
 </dl>

</div>

<div class="help_r">
    <?php
    extract($bean);
    ?>
    <h2><?=$name?></h2>
    <div class="shop_info">

        <div class="shop_simple">
            <p><strong>店铺地址：</strong><small><?=$address;?></small></p>
            <p><strong>店铺电话：</strong><small><?=$phone;?></small></p>
            <p><strong>营业时间：</strong><small><?=$openninghours;?></small></p>
            <p><strong>分期付款：</strong><small><?=$Installment;?></small></p>
        </div>
        <div class="shop_info">
            <dl class="map">
                <dt><a target="_blank" href="http://j.map.baidu.com/4ZPQd">
                    <img src="<?=$mapimg?>" alt="查看地图"></a></dt>
                <dd>
                    <p><img align="left" src="/resources/images/index/bus.gif">
                        <strong>公交车线路</strong><br>
                        <?=$busstations?>
                    </p>


                </dd>
            </dl>
            <div class="shop_txt">
                <p><strong>店铺介绍：</strong></p>
                <hr/>
                 <?=$content?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="help_bot"></div>
</div>
</div>