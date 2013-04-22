<?php
   extract($bean);
?>
<div id="content">
    <div class="location">
        <small></small>
        <strong><a href="/">网站首页</a>&gt;<a href="/welcome/outskirts">手机配件</a>&gt;<a href="/welcome/outskirts">手机保护套</a>&gt;&nbsp;<?=val($name)?></strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="layoutdiv">
        <h1><small>[ 被关注<em id="browse_click"><?=val($views)?></em>次 ]</small>&nbsp;COLO 流沙系列保护壳 for iPhone 4/4S<span class="h1_l"></span><span class="h1_r"></span></h1>
        <div class="bor4">
            <div class="parts_img">
                <div class="parts_img_l">
                    <a target="_blank" href="<?=val($largepic)?>" title="点击查看-<?=$name?>-大图！">
                        <img id="zhuan_prod_img" src="<?=$largepic?>" alt="点击查看- <?=$name?>-大图！"></a>
                </div>
                <div class="parts_img_r">
                    <h2></h2>
                    <ul id="browse_history"></ul>
                    <div class="parts_page">
                        <span id="browse_history_page_bar"></span>
                    </div>
                    <p class="parts_fx">
                        <span>分享到：
                            <a href="javascript:void(0);" onclick="sina();" title="转帖至新浪微博"><img src="/resources/images/index/sina.gif" alt="转帖至新浪微博"></a>
                        </span>
                        <input type="image"
                               onclick="window.open(
                               'http://sighttp.qq.com/authd?IDKEY=5a34fa8867f404b36f0508a8949c55697fb75ef3f7056c11', '_blank')"
                               src="/resources/images/index/parts_bnt1.gif">
                        <input type="image" onclick="window.open('/helpinfo/one/6599F163-553C-3BE7-DA8C-14273BF33BC5','_blank')"
                               src="/resources/images/index/parts_bnt2.gif">
                    </p>
                </div>
            </div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>

    <div class="layoutdiv">
        <h6><img src="/resources/images/index/title29.png" alt=""><span class="h6_l"></span><span class="h6_r"></span></h6>
        <div class="bor3">
            <dl class="parts_info">
                <dt>
                <p><?=val($name)?></p>
                </dt>
                <dd>
                    <div class="info_text">
                       <?=val($remark)?>
                    </div>
                </dd>
            </dl>
        </div>
        <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
    </div>
</div>