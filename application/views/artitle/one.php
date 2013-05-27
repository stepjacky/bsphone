<?php
     extract($bean);

?>
<link rel="stylesheet" href="/resources/styles/artitle.css" />
<div id="content grid_12">
<div class="leftdiv">
    <div class="leftdiv">
        <div class="top6"><span class="top6_l"></span><span class="top6_r"></span></div>
        <div class="bor6">
            <dl class="news_text">
                <dt>
                <p class="double"><strong><?=val($name);?></strong></p>
                <p><span>来源：<em><?=val($source);?></em></span><span>作者：<em><?=val($author);?></em></span>
                    <span>于<em id="time"><?=val(date("Y-m-d",strtotime($firedate)));?></em>发表</span><span>阅读：<em id="views"><?=val($views);?></em></span></p>
                </dt>
                <dd>
                    <div id="news_content" class="news_content">
                        <?=val($content);?>
                    </div>
                    <div class="key">

                        <small>分享到:
                        <a href="javascript:;"><img src="/resources/images/index/sina.gif"></a>
                    </small>
                        关键字：
                        <?php foreach($keywords as $kw):?>

                        <a href="/search/<?=val($kw)?>" title="<?=val($kw)?>" target="_blank"><?=val($kw)?></a>&nbsp;

                        <?php endforeach;?>
                    </div>
                </dd>
            </dl>
            <div class="news_page addmargin">
                <strong><a>本文章有<em><?=val($cmtcount)?></em>条网友评论</a></strong>
                <small><input type="button" onclick="location.hash='#'"></small>
            </div>
        </div>
        <div id="show_waypoints" class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>

    <div class="leftdiv">
        <h6><span class="h6_l"></span><span class="h6_r"></span></h6>
        <div class="bor6">
            <dl class="dtnav savor">
                <dt><span><a class="news_t1"></a></span></dt>
                <dd>
                    <ul>
                       <?php foreach($abouts as $abt):?>

                        <li>
                            <p><a href="/artitle/one/<?=val($abt['id'])?>" target="_blank"><img src="<?=val($abt['minipic'])?>"></a></p>
                            <p><a href="/artitle/one/<?=val($abt['id'])?>" target="_blank"><?=val($abt['name'])?></a></p>
                        </li>

                        <?php endforeach;?>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
    </div>

</div>

<div class="rightdiv">

<div class="rightdiv1">
    <h5><img src="/resources/images/index/news_title6.png"><span class="h5_l"></span>
        <span class="h5_r"></span></h5>
    <div class="bor8">
        <div class="pl">

            <form action='/comment/add_for_artitle/<?=$id?>' method='post'>
            <p><span class="textarea_bg2">
                    <textarea
                       name="content"></textarea>
                </span>
            </p>
            <p class="pl_bnt">
                <input type="submit" class="news_bnt2" value=''   />
                <small><img src="/resources/images/index/about_bg7.gif">发表您的高见，可获得0.1购物基金</small>
            </p>
            </form>
        </div>
    </div>
    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
</div>

<div class="rightdiv1">
    <h5><img src="/resources/images/index/news_title5.png"><span class="h5_l"></span><span class="h5_r"></span></h5>
    <div class="bor8">
        <div id="ping" class="pl_list">

         <?php foreach($comments as $cmt):?>
         <dl>
            <dt>
            <div>
                <p class="new_comment">
                    <img src="<?=val($cmt['userimg'])?>">
                </p>
            </div>
           </dt>
            <dd>
                <p><strong><?=val($cmt['nick'])?></strong></p>
                <p><?=val($cmt['content'])?></p>
            </dd>
            <dd class="zc">来自<a target="_blank" href="/" class="from_client">网页</a>&nbsp;<?=val($cmt['firedate'])?>发表 </dd>
        </dl>
        <?php endforeach;?>

        </div>
    </div>
    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
</div>

</div>
</div>
<script type="text/javascript" src="/resources/scripts/artitle/one.js"></script>