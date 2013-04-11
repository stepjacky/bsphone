<style type="text/css">
  .top-ad{
      width: 485px;
      height: 150px;
      border: none;
  }


</style>
<div class="grid_12">
    <h6><img src="/resources/images/index/parts_title1.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
        <div class="bor3">
            <div class="parts_list">
                <ul>
                    <?php foreach($new10 as $n):?>
                    <?php
                       extract($n);
                    ?>
                    <li class="">
                        <p><a href="/spare/one/<?=val($id)?>"
                              target="_blank">
                            <img src="<?=val($minipic)?>"
                                 alt="<?=val($name)?>"></a></p>
                        <p class="name">
                            <a href="/spare/one/<?=val($id)?>" target="_blank">
                                <?=val($name)?></a></p>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>

<div class="clear"></div>

<?php if (count($sparead['topad2'])>1):?>
<div class="grid_12">
    <div class="parts_ad_r">
        <a href="/spare/one/<?=val($sparead['topad2'][0]['id'])?>"
           title="<?=val($sparead['topad2'][0]['name'])?>"
           target="_blank">
            <img src="<?=val($sparead['topad2'][0]['largepic'])?>"
                 alt="<?=val($sparead['topad2'][0]['name'])?>"
                 class="top-ad"
                    ></a>
    </div>
    <div class="parts_ad_l">
        <a href="/spare/one/<?=val($sparead['topad2'][1]['id'])?>"
           title="<?=val($sparead['topad2'][1]['name'])?>"
           target="_blank">
            <img src="<?=val($sparead['topad2'][1]['largepic'])?>"
                 alt="<?=val($sparead['topad2'][1]['name'])?>"
                 class="top-ad"
                    ></a>
    </div>

</div>
<div class="clear"></div>
<?php endif;?>

<div class="grid_12">
    <h6><img src="/resources/images/index/parts_title2.png"><span class="h6_l"></span><span class="h6_r omega"></span></h6>
    <div class="bor3">
        <div class="parts_list concern">
            <ul>
                <?php foreach($mosts as $mst):?>
                <?php
                extract($mst);
                ?>
                <li >
                    <p>
                        <a target="_blank"
                           href="/spare/one/<?=val($id)?>">
                            <img alt="<?=val($name)?>"
                                 src="<?=val($minipic)?>">
                        </a>
                    </p>
                    <p class="name">
                        <a target="_blank" href="/spare/one/<?=val($id)?>">
                            <?=val($name)?>
                        </a>
                    </p>
                    <span><i>1</i>被关注<em><?=val($views)?></em>次</span>
                </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>


</div>
<div class="clear"></div>

<?php if (count($sparead['bottomad2'])>1):?>
<div class="grid_12">

    <div class="parts_ad_r">
        <a href="/spare/one/<?=val($sparead['bottomad2'][0]['id'])?>"
           title="<?=val($sparead['bottomad2'][0]['name'])?>"
           target="_blank">
            <img src="<?=val($sparead['bottomad2'][0]['largepic'])?>"
                 alt="<?=val($sparead['bottomad2'][0]['name'])?>"
                 class="top-ad"
                    ></a></div>
    <div class="parts_ad_l">
        <a href="/spare/one/<?=val($sparead['bottomad2'][1]['id'])?>"
           title="<?=val($sparead['bottomad2'][1]['name'])?>"
           target="_blank">
            <img src="<?=val($sparead['bottomad2'][1]['largepic'])?>"
                 alt="<?=val($sparead['bottomad2'][1]['name'])?>"
                 class="top-ad"

                    ></a>
    </div>



</div>

<div class="clear"></div>
<?php endif;?>


<?php foreach($typed as $tpd):?>
<?php
     extract($tpd);
    ?>
<div class="grid_12">

    <h2 class="parts_h2">
        <strong class="parts_title1"><?=val($stype['name'])?></strong>
        <small><a target="_blank" href="/spare/by_type/<?=val($stype['id'])?>"><img src="/resources/images/index/parts_more.gif"></a></small>
    </h2>
    <div class="bor3">
        <div class="parts_list">
            <ul>
                <?php foreach($list as $lst):?>
                <?php
                   extract($lst);
                ?>
                <li class="">
                    <p>
                        <a target="_blank" href="/spare/one/<?=val($id)?>">
                        <img alt="<?=val($name)?>"
                             src="<?=val($minipic)?>">
                        </a>
                    </p>
                    <p class="name">
                        <a target="_blank" href="/spare/one/<?=val($id)?>">
                          <?=val($name)?>
                        </a>
                    </p>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>


</div>
<div class="clear"></div>
<?php endforeach;?>
