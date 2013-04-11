<div class="grid_12">
    <div class="parts_nav">
        <ul>
            <?php foreach($sprs as $spr):?>
            <?php
            extract($spr);
            ?>
            <li>
                <a href="/spare/by_type/<?=val($id)?>" target="_blank" class="crumb"><img src="<?=val($icon)?>"><?=val($name)?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<div class="clear"></div>