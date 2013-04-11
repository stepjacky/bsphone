<link href="/resources/styles/about.css" rel="stylesheet" type="text/css"/>

<div id="content">
    <div style="margin-top:10px" class="location">
        <small></small>
        <strong><a href=""/welcome/"">网站首页</a>&gt;<?=$tag?></strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
    <div class="bor4">
        <div class="floatleft">

            <dl>

                <?php

                    while($name = key($menu)) {
                    $item = $menu[$name];
                    extract($item);

                ?>

                <dd name='<?=val($name)?>' class="<?=val($className)?>">
                    <a href="<?=val($href)?>"><?=val($title)?></a></dd>

                <?php
                    next($menu);
                    } ?>

            </dl>
        </div>

        <div class="floatright">


            <h1><?=$tag?></h1>
            <div class="rightdiv1">
                <?=$bean['content'];?>
            </div>


        </div>
    </div>
    <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>