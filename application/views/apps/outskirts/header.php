<link href="/resources/styles/index/outskirts.css" rel="stylesheet" />
<script type="text/javascript" src="/resources/scripts/index/outskirts.js"></script>
<div class="grid_12">
    <div class="parts_nav">
        <ul>
            <?php foreach($sprs as $spr):?>
            <?php
            extract($spr);
            ?>
            <li>
                <a href="/spare/by_type/<?=val($id)?>" target="_blank" class="crumb"><img src="<?=val($icon)?>"><?=val($name)?></a>
                <div>
                    <?php foreach($children as $chd):?>
                    <p><a href="/spare/by_type/<?=val($chd['id'])?>" target="_blank"><?=val($chd['name'])?></a></p>
                    <?php endforeach;?>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>

</div>
<div class="clear"></div>
<div class="grid_12">
    <dl class="parts_flash">
         <?php foreach($topad4 as $ad):?>
    <?php
    extract($ad);
    ?>



        <dd>
            <a href="/spare/one/<?=val($id)?>"
               target="_blank">
                <img src="<?=val($largepic)?>"></a></dd>
        <?php endforeach;?>

     <dt class="">
            <?php foreach($topad4 as $ad):?>
            <?php
                extract($ad);
            ?>
            <span><img src="<?=val($minipic)?>"></span>


            <?php endforeach;?>
</dt>
    </dl>

</div>
<div class="clear"></div>