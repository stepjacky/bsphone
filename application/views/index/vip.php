<script src="/resources/scripts/index/vip.js" type="text/javascript"></script>
<div class="grid_12">
    <div class="float_left vip_l">
        <div class="leftdiv">
            <h6><img src="/resources/images/index/vip_title1.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
            <div class="bor1">
                <div class="help vip_help">
                    <p class="vip_tel"><img src="/resources/images/index/vip_help_5.gif"></p>
                    <p><img src="/resources/images/index/vip_help_6.gif"></p>
                    <p><a target="_blank" href="/welcome/vip"><img src="/resources/images/index/vip_help_2.gif"></a></p>
                    <p><a target="_blank" href="/helpinfo/one/B32F235B-8857-7CEE-27E1-6C61F163C8A9"><img src="/resources/images/index/vip_help_3.gif"></a></p>
                </div>
            </div>
            <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
        </div>
    </div>

    <div class="float_right vip_r">
        <script src="/resources/scripts/index/vip_flash.js" type="text/javascript"></script>
        <dl class="vip_flash">
            <dt>

                <?php foreach($toptrends as $tts):?>

                  <span class=""></span>
                  <?php endforeach;?>
            </dt>

            <?php foreach($toptrends as $tts):?>
                 <dd>
                     <a rel="nofollow"
                        href="<?=val($tts['href'])?>" target="_blank">
                         <img src="<?=val($tts['image'])?>"  /></a></dd>
            <?php endforeach;?>
        </dl>
    </div>
</div>
<div class="clear"></div>
<div class="grid_12">
    <h2 class="funds_h2"><img src="/resources/images/index/vip_title3.gif"><span class="funds_h2_r"></span></h2>
    <div class="bor4">
        <div class="employ">
            <dl>
                <dt>
                    <img src="/resources/images/index/employ_dt.gif">
                </dt>
                <dd class="employ_l"><input type="button" onclick="location.href='/phone/query'" value="" name=""></dd>
                <dd class="employ_r">
                    <p class="locate_1">0</p>
                    <p class="locate_2"><input type="button"  value="" name=""></p>
                    <p class="locate_3">0</p>
                    <p class="locate_4"><input type="button"  value="" name=""></p>
                </dd>
            </dl>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>
<div class="clear"></div>
<div class="grid_12">
    <h2 class="funds_h2"><img src="/resources/images/index/vip_title4.gif"><span class="funds_h2_r"></span></h2>
    <div class="bor4">
        <div class="get_list">
            <ul>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon2.gif"></div>
                    <div class="get_r">
                        <p><strong>绑定邮箱<em>奖励2基金</em></strong></p>
                        <p>没绑定邮箱的旧注册会员第一次绑定邮箱可以获得2基金奖励。</p>
                        <p><input type="image" src="/resources/images/index/task_bnt.gif">
                            <em>(已有41371会员完成)</em>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon9.gif"></div>
                    <div class="get_r">
                        <p><strong>视频评论<em>奖励0.1基金</em></strong></p>
                        <p>视频中心发表评论，每天的前10条评论都可获得0.1基金奖励。</p>
                        <p><input type="image" onclick="location.href='/welcome/movies'" src="/resources/images/index/task_bnt.gif">
                            <em>(已有17724会员完成)</em>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon10.gif"></div>
                    <div class="get_r">
                        <p><strong>产品评论<em>奖励0.1基金</em></strong></p>
                        <p>产品页面发表评论，每天的前10条评论都可获得0.1基金奖励。</p>
                        <p><input type="image" onclick="location.href='/phone/query'" src="/resources/images/index/task_bnt.gif">
                            <em>(已有34446会员完成)</em>
                        </p>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon3.gif"></div>
                    <div class="get_r">
                        <p><strong>评论新闻<em>奖励0.1基金</em></strong></p>
                        <p>新闻中心发表评论，每天的前10条评论都可获得0.1基金奖励。</p>
                        <p><input type="image" onclick="location.href='/welcome/artitle'" src="/resources/images/index/task_bnt.gif">
                            <em>(已有138829会员完成)</em>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon4.gif"></div>
                    <div class="get_r">
                        <p><strong>分享使用心得<em>奖励5基金</em></strong></p>
                        <p>产品页面发表产品使用心得与其它用户共同分享，每两个月发表的第一次心得可获得5基金奖励。如果在发表的同时分享到微博将可获得10基金奖励。</p>
                        <p><input type="image" onclick="location.href='/phone/query'" src="/resources/images/index/task_bnt.gif">
                            <em>(已有9111会员完成)</em>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon5.gif"></div>
                    <div class="get_r">
                        <p><strong>上传头像<em>奖励2基金</em></strong></p>
                        <p>在会员中心第一次上传头像可以获得2基金奖励。</p>
                        <p><input type="image" onclick="location.href='/profile'" src="/resources/images/index/task_bnt1.gif">
                            <em>(已有22077会员完成)</em>
                        </p>
                    </div>
                </li>
            </ul>
            <ul>

                <li>
                    <div class="get_l"><img src="/resources/images/index/rw_icon11.gif"></div>
                    <div class="get_r">
                        <p><strong>抢沙发<em>奖励0.2基金</em></strong></p>
                        <p>在产品页面、新闻中心和视频中心，对没发表过评论的产品、新闻和视频发表第一个评论，即抢到沙发位置，可获得0.2基金奖励。</p>
                        <p><input type="image" onclick="location.href='/welcome/artitle'" src="/resources/images/index/task_bnt.gif">
                            <em>(已有4068会员完成)</em>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>
<div class="clear"></div>
<div class="grid_12">
    <h2 class="funds_h2"><a name="hree"> </a><img src="/resources/images/index/vip_title2.gif"><span class="funds_h2_r"></span></h2>
    <div class="bor4">
        <div class="past_list">
            <ul>
               <?php foreach($trends as $trd):?>
                <li>
                    <p><a target="_blank"
                          title="<?=val($trd['name'])?>"
                          href="/trends/one/<?=val($trd['id'])?>"
                            >
                        <img alt="<?=val($trd['name'])?>"
                             src="<?=val($trd['minipic'])?>"></a></p>
                    <p><a target="_blank"
                          title="<?=val($trd['name'])?>"
                          href="/trends/one/<?=val($trd['id'])?>"
                            ><?=val($trd['name'])?></a></p>
                </li>
               <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>

<div class="clear"></div>
<div class="grid_12">
<h5><span class="h5_l"></span><span class="h5_r"></span></h5>
<div class="bor3">
<div class="info_review vip_review">
<div class="info_l">
<h2><strong>说几句吧！</strong></h2>
<div id="info_review_form" class="info_review_form">
    <form action="/comment/add_for_found" method="post">
    <p>
        <span class="textarea_bg"><textarea  rows="" cols="" name="content"></textarea></span>

    </p>
    <p>
        <small>

            <input type="submit" value="" class="post_bnt">
        </small>
        <em><img src="/resources/images/index/about_bg7.gif"></em> 登录后发表您的高见，可获得0.1购物基金

            <img src="/resources/images/index/jijin.jpg">
    </p>
    </form>
</div>
<div class="info_review_list">

    <ul id="comments_list">

        <?php foreach($most_comments as $cmt): ?>
        <?php
           extract($cmt);
        ?>
        <li>
            <div class="info_list_l">
                <img src="<?=val($userimg)?>">

            </div>
            <div class="info_list_r">
                <p><em><?=val($nick)?></em></p>
                <p><?=val($content)?></p>
            </div>
            <div><span>发表于:<?=val($firedate)?></span></div>
        </li>

        <?php endforeach;?>


           </ul>
</div>
</div>

<div class="info_r">
<h2><strong>成功兑换过的用户</strong></h2>
<ul class="most">
<li>
    <div class="most_l">
        <img onmouseout="t_info = setTimeout('$(\'#info1_3535\').hide()',300);"  src="http://upload.vgooo.com/images/userface/shopface/2012/0429/1729044620123031.jpg">
        <div class="info_vip">
            <img alt="金卡会员" src="/resources/images/index/vip_1.png">
        </div>
    </div>
    <div class="most_r">
        <p>用户昵称：<em>stephenie_l</em></p>
        <p>本月话费：<font>成功兑换30元</font></p>
        <p>购物基金：<b>54.12</b>元</p>
    </div>
</li>

</ul>
</div>

</div>

</div>
<div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
</div>