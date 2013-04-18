<!-- login end -->
<div class="clear"></div>
<div class="grid_12">

    <div class="nav">
        <ul>
           <?php
            while($key = key($headmenu)){
               $link = $headmenu[$key];
               extract($link);

            ?>
                <li><a class="<?=$className?>" name='<?=$key?>' href="<?=$href?>" title="<?=$title?>"><?=$title?></a></li>

            <?php

                next($headmenu);
            } ?>

        </ul>


        <p><span class="l"></span> <span class="c"><a href="/shopcart/index/<?=getGUID()?>" rel="nofollow">购物车(<em
                id="loadCartInfo">0</em>)件</a></span> <span class="r"></span></p>
    </div>
</div>
<div class="clear"></div>
<div class="grid_12 search-bar">

    <dl class="search">
        <form id="Vgooo_Form_top" name="Vgooo_Form_top" action="/search/all"
              method="post">
            <dt>
                <input autocomplete="on" class="search_txt ac_input"
                      id="keyword"
                       name="keyword" type="text">
                <input class="search_bnt" title="点击进行搜索" onclick="quicksearch();" type="button">
            </dt>
        </form>
        <dd>
            <p>热门机型:
                <a href="/phone/one/索尼LT26w" title="索尼LT26w" target="_blank">索尼LT26w</a>
                <a href="/phone/one/LGP880" title="LG P880 " target="_blank">LG
                    P880 </a>
                <a href="/phone/one/HTCOneS" title="HTC One S" target="_blank">HTC One S</a>
                <a href="/phone/one/苹果" title="HTC One S" target="_blank">苹果5</a>
                <a href="/phone/one/ipad4" title="HTC One S" target="_blank">iPad4</a>
                <a href="" title="" target="_blank"></a>
            </p>
            <span><a href="/phone/query">快速选机</a></span></dd>
    </dl>
    <dl class="brand">
        <dt class="">
            <strong>全部商品</strong>
        <div class="all">
            <div class="all_div">
                <div class="all_bg"></div>
                <div class="all_txt">
                    <p><strong>产品：</strong>
                        <small>
                            <?php
                            $qidx=1;
                            foreach($brands as $brd):
                                extract($brd);

                                ?>

                                <a href="/phone/query?brand=<?=$id?>&qidxa=<?=$qidx?>" qidxa="<?=$qidx?>" title="<?=$name?>"><?=$name?></a>

                                <?php
                                $qidx++;
                            endforeach;
                            ?>



                        </small>
                    </p>
                    <p><strong>配件：</strong>
                        <small><a href="/spare/by_type/2A53A4BD-F4FA-C8CB-A18D-C7A4E050FADB">手机保护套</a><a
                                href="/spare/by_type/59DBE786-2038-E659-C663-5A2616DFA386">屏幕保护膜</a><a
                                href="/spare/by_type/CEC04022-4104-5616-E694-E29B409CA4CF">蓝牙耳机</a><a
                                href="/spare/by_type/CEAC35E7-7EC0-33CA-34A9-A51D18C1EB49">手机电池</a><a
                                href="/spare/by_type/59DBE786-2038-E659-C663-5A2616DFA386">内存卡</a><a
                                href="/spare/by_type/B0FF2AEC-8396-4357-5B95-AFC581A5B4B9">其他配件</a></small>
                    </p>
                </div>
            </div>
        </div>
        </dt>
        <dd>
            <ul>
                <li><a href="/phone/query?brand=apple&qidxa=1"><img alt="苹果"
                                                                    src="http://upload.vgooo.com/images/old_dir/mobilebrand//20110414/1214043020110839.gif"></a>
                </li>
                <li><a href="/phone/query?brand=sumsung&qidxa=2"><img alt="三星"
                                                                      src="http://upload.vgooo.com/images/old_dir/mobilebrand//20110301/0401034820112059.gif"></a>
                </li>
                <li><a href="/phone/query?brand=htc&qidxa=3"><img alt="HTC"
                                                                  src="http://upload.vgooo.com/images/old_dir/mobilebrand//20110301/040103232011218.gif"></a>
                </li>
                <li><a href="/phone/query?brand=sony&qidxa=4"><img alt="索尼"
                                                                   src="http://upload.vgooo.com/images/old_dir/mobilebrand//20110504/1504052420114227.gif"></a>
                </li>
                <li><a href="/phone/query?brand=nokia&qidxa=5"><img alt="诺基亚"
                                                                    src="http://upload.vgooo.com/images/old_dir/mobilebrand//20110301/0401033020111979.gif"></a>
                </li>
                <li><a href="/phone/query?brand=mi&qidxa=6"><img alt="小米"
                                                                 src="http://upload.vgooo.com/images/2013/01/23/mobilebrand//1358934404.jpg"></a>
                </li>
                <li><a href="/phone/query?brand=meizu&qidxa=7"><img alt="魅族"
                                                                       src="http://upload.vgooo.com/images/2013/01/23/mobilebrand//1358934392.jpg"></a>
                </li>
                <li><a href="/phone/query?brand=huawei&qidxa=8"><img alt="华为"
                                                                     src="http://upload.vgooo.com/images/2012/12/26/mobilebrand//1356495868.jpg"></a>
                </li>
            </ul>
            <p><a href="/phone/query">更多品牌</a></p>
        </dd>
    </dl>
</div>
<div class="clear"></div>