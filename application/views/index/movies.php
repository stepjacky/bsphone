<link href="/resources/styles/index/artitle.css" rel="stylesheet" type="text/css" />
<div class="grid_12">
    <div class="news_tj">
        <ul>

            <?php foreach($top4 as $t):?>
            <?php
            extract($t);
            ?>
            <li>
                <a target="_blank"
                   href="/video/one/<?=val($id)?>">
                    <img src="<?=val($minipic)?>"></a>
                <p class="tj_bg"></p>
                <p><a target="_blank" href="/video/one/<?=val($id)?>"
                        >
                   <span> <?=val($name)?></span>
                </a></p>
            </li>
            <?php endforeach;?>
        </ul>
    </div>

</div>
<div class="clear"></div>



<div class="layout">
    <div id="new_l" class="new_l">
        <h2>最新视频<span class="h2_l"></span><span class="h2_r"></span></h2>
        <div id="new_list" class="new_list">
            <?php foreach($beans as $bean): ?>
                <?php
                extract($bean);

                ?>
                <dl>
                    <dt>

                        <a target="_blank"  href="/video/one/<?=val($id)?>">
                            <?=val($name)?>
                            <img src="<?=val($minipic)?>">
                            <small></small><span></span>
                        </a>

                    </dt>
                    <dd>
                        <h1><small class="hot">
                                <?=$cmtnum;?>

                            </small>
                            <a  href="/video/one/<?=val($id)?>" target="_blank">
                                <?=val($name)?>
                            </a>
                            <span></span></h1>
                        <div class="txt">
                            <p>
                                <?=val($remark)?>
                                ...
                                <a href="/video/one/<?=val($id)?>" target="_blank">阅读全文</a></p>
                        </div>
                        <div class="new_tag">

            <span>标签：
                <?php foreach($atags as $atag):  ?>
                    <em><a href='/video/by_tags/<?=val($atag)?>' target="_blank"><?=val($atag)?></a></em>
                    /
                <?php endforeach;?>
                </span><span>于<em><?=val($firedate)?></em>发表</span>

                        </div>
                    </dd>
                </dl>
            <?php endforeach;?>

        </div>
        <div class="news_page"></div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
    </div>

    <div class="new_r">

        <ul class="new_nav" style="position: absolute; left: 0px;">

            <li class="crumb"><a href="/video/by_tags/all/0">全部</a></li>
            <?php foreach($gtags as $key=>$tagb):?>
                <li><a class="artitle-tag-<?=val($key+1)?>"
                       href="/video/by_tags/<?=val($tagb['name'])?>/<?=val($key+1)?>">
                        <?=val($tagb['name'])?></a></li>
            <?php endforeach;?>

        </ul>
    </div>
</div>

<script type="text/javascript">
    var tidx = <?=val($tidx)?>;
</script>
<script type="text/javascript" src="/resources/scripts/artitle/bytags.js"></script>