<link href="/resources/styles/index/artitle.css" rel="stylesheet"  /><div class="grid_12">    <div class="news_tj">        <ul>           <?php foreach($top4 as $t):?>            <?php              extract($t);            ?>            <li>                <a target="_blank"                   href="/artitle/one/<?=val($id)?>">                    <img src="<?=val($minipic)?>"></a>                <p class="tj_bg"></p>                <p><a target="_blank" href="/artitle/one/<?=val($id)?>"                        >                    <span> <?=val($name)?></span>                </a></p>            </li>            <?php endforeach;?>        </ul>    </div></div><div class="clear"></div><div class="grid_12">    <div class="news_subnav">        <ul>            <li class="crumb"><a href="/welcome/artitle/">全部</a></li>         <?php foreach($tags as $key=>$tag):?>            <li><a class="artitle-tag-<?=val($key)?>" href="/artitle/by_tags/<?=val($tag['name'])?>/<?=val($key)?>"><?=val($tag['name'])?></a></li>          <?php endforeach;?>        </ul>    </div></div><div class="clear"></div><div class="grid_8">    <h6><img src="http://news.vgooo.com/images/ui/news_title1.png"><span class="h6_l"></span><span class="h6_r"></span></h6>    <div class="bor6">        <div class="news_list">          <?php foreach($beans as $bean): ?>            <?php                extract($bean);            ?>            <dl>                <dt>                <p><strong>                    <a href="/artitle/one/<?=val($id)?>" target="_blank"><?=val($name)?></a>                </strong></p>                <p><span>标签：                    <?php foreach($atags as $atag):  ?>                      <em><a href='/artitle/by_tags/<?=val($atag)?>' target="_blank"><?=val($atag)?></a></em>                    <?php endforeach;?>                </span><span>于<em><?=val($firedate)?></em>发表</span></p>                </dt>                <dd>                    <p align="center">                        <a href="/artitle/one/<?=val($id)?>" target="_blank"><img src="<?=val($largepic)?>"></a>                    </p>                    <p>                      <?=val($summary)?>                        <a href="/artitle/one/<?=val($id)?>" target="_blank">...阅读全文&gt;&gt;</a></p>                </dd>            </dl>           <?php endforeach;?>        </div>    </div>    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div></div><div class="grid_4 omega">    <h5><img src="http://news.vgooo.com/images/ui/news_title11.png"><span class="h5_l"></span><span class="h5_r"></span></h5>    <div class="bor8">        <div class="news_list4">            <ul>                <?php foreach($comments as $cmt):?>                <?php                   extract($cmt);                ?>                <li>                    <div>                        <p class="new_comment">                            <img  src="<?=val($userimg)?>">                            <span><em><?=val($username)?></em>                               <?=val($content)?>                            </span>                        </p>                        <p class="style2">发表于：<strong><a href="/artitle/one/<?=val($artid)?>" target="_blank">                            <?=val($artname)?></a></strong></p>                    </div>                </li>               <?php endforeach;?>            </ul>        </div>    </div>    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div></div><script type="text/javascript">   var tidx = <?=val($tidx)?>;</script><script type="text/javascript" src="/resources/scripts/artitle/bytags.js"></script>