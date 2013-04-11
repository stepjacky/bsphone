<link type="text/css" rel="stylesheet" href="/resources/styles/help.css"   />
<div id="content">
    <div class="location">
        <small></small>
        <strong><a href="/welcome/">网站首页</a>&gt; <a href="/helpinfo/index">帮助中心</a> &gt; 售后服务</strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="layoutdiv">
        <h2 class="help_title"><img src="/resources/images/index/title39.gif" alt=""></h2>
        <div class="help_bor">
            <div class="help_l">
                <dl>
                    <dt><?=$bean['catalog']['name']?></dt>
                    <dd>
                        <ul>
                           <?php foreach($bean['list'] as $lst):
                              extract($lst);
                           ?>
                            <li>
                                <a href="/helpinfo/one/<?=$id?>" title="点击查看<?=$name?>的更详细内容！"><?=$name?></a></li>

                            <?php endforeach;?>
                        </ul>
                    </dd>
                </dl>
                <div class="return_bnt"><a href="/helpinfo/index"><img src="/resources/images/index/return_bnt.gif" alt=""></a></div>
            </div>
            <div class="help_r">
                <h2> <?=$bean['bean']['name']?></h2>
                <div class="help_info">
                    <?=$bean['bean']['content']?>
                </div>
            </div>
        </div>
        <div class="help_bot"></div>
    </div>

</div>