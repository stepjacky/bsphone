<link href="/resources/styles/index/movies.css" rel="stylesheet" type="text/css" />
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
<div class="grid_12">
    <div class="news_subnav">
        <ul>
            <li class="crumb"><a href="/welcome/movies">全部</a></li>
            <?php foreach($tags as $key=>$tag):?>
            <li><a class="artitle-tag-<?=val($key)?>" href="/video/by_tags/<?=val($tag['name'])?>/<?=val($key)?>"><?=val($tag['name'])?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="video_l">
        <div class="layoutdiv">
            <h6><a href="/video/newest" rel="nofollow"></a><img src="/resources/images/index/title53.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
            <div class="bor2">
                <div class="video_list1">
                    <ul>
                         <?php foreach($beans as $bean): ?>
                         <?php
                                extract($bean);

                         ?>
                        <li>
                            <p class="video_pic"><a target="_blank"  href="/video/one/<?=val($id)?>">
                                <img src="<?=val($minipic)?>" alt="<?=val($name)?>"></a>
                                <a target="_blank"  href="/video/one/<?=val($id)?>">
                                    <small></small>
                                </a>
                            </p>
                            <p class="video_name"><?=val($name)?></p>
                            <p><span class="video_time"><?=val(date("Y-m-d",strtotime($firedate)))?></span><span class="video_order"><?=val($views)?></span></p>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
        </div>

        <div class="layoutdiv">
            <h6><a href="/video/hotest" rel="nofollow"></a><img src="/resources/images/index/title54.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
            <div class="bor2">
                <div class="video_list1">
                    <ul>

                        <?php foreach($hots as $bean): ?>
                        <?php
                        extract($bean);

                        ?>
                        <li>
                            <p class="video_pic"><a target="_blank" href="/video/one/<?=val($id)?>">
                                <img src="<?=val($minipic)?>" alt="<?=val($name)?>"></a>
                                <a target="_blank" href="/video/<?=val($id)?>">
                                    <small></small>
                                </a>
                            </p>
                            <p class="video_name">
                                <a target="_blank"  href="/video/one/<?=val($id)?>">
                                <?=val($name)?>
                                </a>
                            </p>
                            <p><span class="video_time"><?=val(date("Y-m-d",strtotime($firedate)))?></span><span class="video_order"><?=val($views)?></span></p>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
        </div>


</div>
<div class="video_r">

        <div class="rightdiv1">
            <h5><img src="/resources/images/index/news_title11.png"><span class="h5_l"></span><span class="h5_r"></span></h5>
            <div class="bor2">
                <div class="video_list3">
                    <ul>

                        <?php foreach($comments as $cmt):?>
                        <?php
                        extract($cmt);
                        ?>
                        <li>
                            <div>
                                <p class="new_comment">
                                    <img  src="<?=val($userimg)?>">
                            <span><em><?=val($username)?></em>
                                <?=val($content)?>
                            </span>
                                </p>
                                <p class="style2">发表于：<strong><a href="/artitle/one/<?=val($artid)?>" target="_blank">
                                    <?=val($artname)?></a></strong></p>
                            </div>
                        </li>
                        <?php endforeach;?>

                    </ul>
                </div>
            </div>
            <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
        </div>
</div>
<div class="clear"></div>