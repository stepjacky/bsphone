<link type="text/css" rel="stylesheet" href="/resources/styles/help.css"   />
<div id="content">
    <div class="location">
        <small></small>
        <strong><a href="/welcome/">网站首页</a>&gt;帮助中心</strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="layoutdiv">
        <h2 class="help_title"><img src="/resources/images/index/title39.gif" alt=""></h2>
        <div class="bor4">
            <div class="help_content">
                <div class="help_list">

                   <?php foreach($beans as $help):
                        extract($help);
                   ?>
                    <dl>
                        <dt><span>
                            <img src="<?=$bean['minipic']?>" alt=""></span>
                            <a href="javascript:;" title="点击查看[<?=$bean['name']?>]的所有内容！"
                               class="lightblue"><?=$bean['name']?></a></dt>
                        <dd>
                            <?php foreach($list as $lst):
                                extract($lst);
                            ?>
                                 <a href="/helpinfo/one/<?=$id?>" title="点击查看[<?=$name?>]的详细内容！"><?=$name?></a>

                            <?php endforeach; ?>

                        </dd>

                    </dl>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>

</div>

