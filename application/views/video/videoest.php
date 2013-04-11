<link href="/resources/styles/index/movies.css" rel="stylesheet" type="text/css" />
<div id="content">
    <div class="location">
        <small></small>
        <strong><a href="http://www.vgooo.com">网站首页</a>&gt;<a href="/video/index.html">视频中心</a><a href="/welcome/video/"></a></strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="layoutdiv">
        <h6><?=val($title)?><span class="h6_l"></span><span class="h6_r"></span></h6>
        <div class="bor3">
            <div class="video_list2">
                <ul>
                   <?php foreach($beans as $bean):?>
                   <?php
                      extract($bean);

                    ?>
                    <li>
                        <p class="video_pic"><a target="_blank"  href="/video/one/<?=val($id)?>">
                            <img src="<?=val($minipic)?>" alt="<?=val($name)?>"><small></small></a></p>
                        <p class="video_name"><a target="_blank"  href="/video/one/<?=val($id)?>">
                            <?=val($name)?></a></p>
                        <p><span class="video_time"><?=val(date("Y-m-d",strtotime($firedate)))?></span><span class="video_order"><?=val($views)?></span></p>
                    </li>
                    <?php endforeach;?>
                </ul>
                <div class="page">
                    <?=val($pagelink)?>
                </div>
            </div>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>