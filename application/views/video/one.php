<?php
   extract($bean);

?>
<link href="/resources/styles/index/movies.css" rel="stylesheet" type="text/css" />
<div id="content">
<div class="layoutdiv">
    <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
    <div class="bor5">
        <div class="video">
            <div class="video_title">
                <h1><?=val($name)?></h1>
            </div>
            <div class="video_view">
                <span id="video_show">
                    <embed width="800"
                           height="490"
                           align="middle"
                           type="application/x-shockwave-flash"
                           allowscriptaccess="always"
                           quality="high"
                           allowfullscreen="true"
                           id="flash1"
                           wmode="Opaque"
                           src="<?=val($address)?>"
                           name="flash1"
                           allownetworking="all">
                </span>
                <p>
                    <small>分享到:<a href="javascript:sina();"><img src="/resources/images/index/sina.gif"></a></small>
                    标签：
                    <?php foreach($atags as $atag):?>


                    <a href="/search/all?keyword=<?=val($atag)?>" title="<?=val($atag)?>">
                        <?=val($atag)?>                </a>&nbsp;
                   <?php endforeach;?>
                </p>
            </div>
        </div>
    </div>
    <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>

<div class="layoutdiv">
<div class="video_left">
<h5><!--small class="award"><a href="http://plug.vgooo.com/amazing" target="_blank"><img src="/resources/images/index/award.png" /></a></small--><img src="/resources/images/index/news_title6.png"><span class="h5_l"></span><span class="h5_r"></span></h5>
<div class="bor2">
<div id="video_comments" class="video_comments">
<div class="from">
<form action="/comment/add_for_video/<?=$id?>" method="post">
    <p><span class="textarea_bg3"><textarea  name="content"></textarea></span></p>
    <p>
        <small>
            <input type="submit" value="" name="" class="post_bnt" />
        </small>
        <em><img src="/resources/images/index/about_bg7.gif"></em> 登录后发表您的高见，可获得0.1购物基金
        <img src="/resources/images/index/jijin.jpg">
    </p>
</form>
</div>

<div class="list">
<ul id="ping">
<?php foreach($comments as $cmt):?>
<?php
    extract($cmt);

    ?>

<li>
    <img  src="<?=val($userimg)?>">
    <div class="list_txt">
        <p><strong><?=val($username)?></strong></p>
        <p><?=val($content)?></p>
    </div>
    <div class="info_vip">
        <img alt="普通会员" src="http://www.vgooo.com/user/resources/images/index/vip_3.png">
    </div>

    <div class="zc">发布于:<?=val(date('y-M-d ',strtotime($firedate)))?></div>
</li>
<?php endforeach;?>
</ul>
</div>

</div>
</div>
<div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>
<div class="video_right">
    <div class="rightdiv">
        <h5><small></small><img src="/resources/images/index/title55.png"><span class="h5_l"></span><span class="h5_r"></span></h5>
        <div class="bor2">
            <div class="video_content">
                <div class="video_txt">
                    <p><?=val($name)?></p>
                </div>
                <div class="video_key">
                    <p><span>发表于<?=val($firedate)?></span><span>播放次数：<?=val($views)?>次</span></p>
                </div>
            </div>
        </div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
    </div>

    <div class="rightdiv">
        <h6><small></small><img src="/resources/images/index/titlexgpj.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
        <div class="bor2">
            <div class="xg_video">
                <ul class="video_list2">
                    <?php foreach($abouts as $abt):?>
                    <?php
                       extract($abt);

                    ?>

                    <li>
                        <p class="video_pic"><a target="_blank" href="/video/one/<?=val($id)?>">
                            <img src="<?=val($minipic)?>" alt="<?=val($name)?>"><small></small></a></p>
                        <p class="video_name"><a target="_blank" href="/video/one/<?=val($id)?>">
                            <?=val($name)?></a></p>
                        <p><span class="video_time"><?=date('y-M-d',strtotime($firedate))?></span><span class="video_order"><?=val($views)?></span></p>
                    </li>
                   <?php endforeach;?>

                </ul>
            </div>
        </div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
    </div>

</div>
</div>

</div>
    <script type="text/javascript" src='/resources/scripts/video/one.js'></script>