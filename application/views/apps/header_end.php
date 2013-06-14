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
        <form  action="/phone/search"
               method="post">
            <dt>
                <input autocomplete="on" class="search_txt ac_input"
                      id="keyword"
                       name="keyword" type="text">
                <input class="search_bnt"
                       title="点击进行搜索"
                       type="submit"
                       name=""
                       value=""
                    >
            </dt>
        </form>
        <dd>
            <p>热门机型:
                <?php
                   $r = 0;
                ?>

                <?php foreach($recphone as $rphone):?>
                <a href="/phone/one/<?=$rphone['id']?>" title="<?=$rphone['name']?>"
                   target="_blank"><?=$rphone['name']?></a>
                <?php
                    if($r++ ==4) break;

                    ?>
                <?php endforeach;?>
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
                        <small><a href="/spare/by_type/6BB5F53F-2732-0395-BF1F-DDF919C6D7E5">手机保护套</a><a
                                href="/spare/by_type/3B9E15CA-AFD6-FBBD-3D76-EED8EF63274E">屏幕保护膜</a><a
                                href="/spare/by_type/83B7A85D-10E2-19BF-3460-14F5FC13B81D">蓝牙耳机</a><a
                                href="/spare/by_type/8EC1036E-8892-48B8-BE90-87B8C5E42D65">手机电池</a><a
                                href="/spare/by_type/E5D65E68-CA70-B810-C151-B8EB68D63A77">内存卡</a><a
                                href="/spare/by_type/9CFDAF9D-0C80-580A-9C18-7E910EB5282C">其他配件</a></small>
                    </p>
                </div>
            </div>
        </div>
        </dt>
        <dd>
            <ul>
                <li><a href="/phone/query?brand=apple&qidxa=1">
                        <img alt="苹果"
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