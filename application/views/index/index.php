<link rel="stylesheet" href="/resources/styles/index/index.css" media="screen,print"/>
<div class="grid_3 index-top index-top-left">
    <h5><img src="/resources/images/index/title1.png"><span class="h5_l"></span><span class="h5_r"></span></h5>

    <div class="bor1">
        <div class="working">工作时间:上午<strong>9:30</strong>-晚上<strong>18:30</strong></div>
        <div class="tel">
            <img src="/resources/images/index/index_phone_4.gif">
        </div>
    </div>
    <div class="bot2"><a href="http://sighttp.qq.com/authd?IDKEY=5a34fa8867f404b36f0508a8949c55697fb75ef3f7056c11" target="_blank" rel="nofollow"></a></div>
</div>
<div class="grid_6 index-top">
    <script src="/resources/scripts/index/index_flash.js" type="text/javascript"></script>
    <dl class="index_flash">
        <dt>

            <?php foreach($pptartitles as $ppt):?>

            <span class=""></span>
            <?php endforeach;?>
        </dt>

        <?php foreach($pptartitles as $ppt):?>
        <dd>
            <a rel="nofollow"
               href="<?=val($ppt['href'])?>" target="_blank">
                <img src="<?=val($ppt['image'])?>" /></a></dd>
        <?php endforeach;?>
    </dl>




</div>
<div class="grid_3 leftdiv index-top omega ">

    <h5><img src="/resources/images/index/title1r.png"><span class="h5_l"></span><span class="h5_r"></span></h5>

    <div class="bor1">
        <ul class="compar">
            <?php foreach($comartitles as $art):  ?>
            <li>
                <a href="/trends/one/<?=val($art['id'])?>" target="_blank">
                    <?=val($art['name'])?>

                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>


</div>

<div class="clear"></div>
<div class="grid_3 index-middle">
    <div class="leftdiv">

        <h5><img src="/resources/images/index/title2.png"><span class="h5_l"></span><span class="h5_r"></span></h5>

        <div class="bor1">
            <ul class="gwbz_ul1"><img src="/resources/images/index/help_1.png" id="help_1" usemap="#m_help_1"/></ul>
            <ul class="gwbz_ul2"><img src="/resources/images/index/help_2.png" id="help_2" usemap="#m_help_2"/></ul>
            <ul class="gwbz_ul3"><img src="/resources/images/index/help_3.png" id="help_3" usemap="#m_help_3"/></ul>

            <map name="m_help_1" id="m_help_1">
                <area shape="rect" coords="122,46,199,68" href="/outcome/show" alt="" />
                <area shape="rect" coords="6,46,89,68" href="javascript:;" alt="" />
                <area shape="rect" coords="72,8,137,29" href="/outcome/show" alt="" />
            </map>

            <map name="m_help_2" id="m_help_2">
                <area shape="rect" coords="122,48,198,67" href="#" alt="" />
                <area shape="rect" coords="10,48,87,67" href="/preorder" alt="" />
                <area shape="rect" coords="78,8,145,32" href="#" alt="" />
            </map>

            <map name="m_help_3" id="m_help_3">
                <area shape="rect" coords="135,0,194,61" href="" alt="" />
                <area shape="rect" coords="70,0,133,61" href="http://weibo.com/u/1880608340" alt="" />
                <area shape="rect" coords="6,0,69,61" href="/welcome/joinus" alt="加盟合作" />
            </map>
        </div>
        <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>

    </div>
    <div class="leftdiv">

        <h5>
            <small><a rel="nofollow" target="_blank" href="/phone/query"><img src="/resources/images/index/fx.gif"></a>
            </small>
            <img src="/resources/images/index/title3.png"><span class="h5_l"></span><span class="h5_r"></span></h5>
        <div class="bor1">
            <dl class="share" style="height:304px;">
                <dt>有<em>9176</em>个人分享了手机使用心得</dt>
                <dd>
                    <ul id="sharelist">
                      <?php
                        $i=0;
                        foreach($shareinfos as $shr):?>

                        <?php
                            $i++;
                           extract($shr);
                        ?>
                        <li att="60" style="display:block;height:auto;">

                            <img alt="pc7up"
                                 src="<?=$avatar?>">

                            <div class="share_r">
                                <p class="pp"><i>

                                        购买：</i><em><a
                                       <a href="/phone/one/<?=val($pid)?>"><?=val($pname)?></a></em></p>

                                <p><font color="#1d7f3b">优点：</font><a style="color:#5D5152;text-decoration: none;"
                                                                      href="/phone/one/<?=val($pid)?>"
                                                                      target="_blank"><?=val($virtue)?></a>
                                </p>

                                <p><font color="#1d7f3b">缺点：</font><a style="color:#5D5152;text-decoration: none;"
                                                                      href="/phone/one/<?=val($pid)?>"
                                                                      target="_blank"><?=val($defect)?></a></p>
                            </div>

                        </li>

                    <?php endforeach;?>

                    </ul>
                    <div class="share_mask"><img src="/resources/images/index/share_mask.png"></div>
                </dd>
            </dl>

        </div>
        <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>

    </div>
</div>
<div class="grid_9 index-middle  omega">
<div class="hot-phone">

<h6><a href="/phone/query"></a><img src="/resources/images/index/title5.png"><span class="h6_l"></span><span
        class="h6_r"></span></h6>

<div class="bor2">
<ul class="list1">
    <?php foreach($recphone as $rphone):?>

    <?php
        extract($rphone);
    ?>
<li>
    <p><a href="/phone/one/<?=val($id)?>" title="<?=val($name)?>" target="_blank"><img
            src="<?=val($minipic)?>" alt="<?=val($name)?>"></a></p>

    <p><a href="/phone/one/<?=val($id)?>" title="<?=val($name)?>" target="_blank"><?=val($name)?></a>
    </p>

    <div class="pricediv">
        <em id="price_1226">¥<?=val($price)?></em>
    </div>
</li>
<?php endforeach;?>
</ul>
</div>
<div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
<div class="new-hot-phone">

    <h6><a href="/phone/hotphone" rel="nofollow"></a><img src="/resources/images/index/title6.png"><span
            class="h6_l"></span><span class="h6_r"></span></h6>

    <div class="bor2">
        <ul class="list2">
              <?php foreach($cmiphone as $phone):?>

    <?php
    extract($phone);
    ?>
            <li>
                <p><a href="/phone/one/<?=val($id)?>" title="<?=val($name)?>" target="_blank"><img
                        src="<?=val($minipic)?>" alt="<?=val($name)?>"></a></p>

                <p><a href="/phone/one/<?=val($id)?>" title="<?=val($name)?>"  target="_blank"><?=val($name)?></a></p>
            </li>
      <?php endforeach;?>


        </ul>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
</div>
<div class="clear"></div>
<div class="grid_3 leftdiv">

    <h5><img src="/resources/images/index/title4.png"><span class="h5_l"></span><span class="h5_r"></span></h5>

    <div class="bor1">
        <dl class="branch">
            <dt>
                       <span  id="branch_img">
                          <img  src=""/>

                        </span>
            </dt>
            <?php foreach($shopareas as $shs):?>
            <?php
                extract($shs);
            ?>

            <dd ><a target="_blank" href="/shop/ofarea/<?=$id?>" onmouseover="$('#branch_img').attr('src','<?=$minipic?>');">
                <?=$name?>

            </a></dd>
            <?php endforeach ;?>
        </dl>
        <p class="service_bnt"><a href="/welcome/service" target="_blank" rel="nofollow"><img
                src="/resources/images/index/service.gif"></a></p>
    </div>
    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>


</div>
<div class="grid_9 index-bottom hot-spare omega">

    <h6><a href="/welcome/outskirts"></a><img src="/resources/images/index/titlermpj.png"><span
            class="h6_l"></span><span class="h6_r"></span></h6>

    <div class="bor2">
        <dl class="dtnav parts">
            <dd class="block">
                <ul>
                     <?php foreach($recspare as $phone):?>

    <?php
    extract($phone);
    ?>

                    <li>
                        <p><a href="/spare/one/<?=$id?>" title="<?=$name?>"
                              target="_blank"><img
                                src="<?=$minipic?>"
                                alt="<?=$name?>"></a></p>

                        <p><a href="/spare/one/<?=$id?>" title="<?=$name?>"
                              target="_blank"><?=$name?></a></p>
                    </li>
                   <?php endforeach;?>
                </ul>
            </dd>
        </dl>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
<div class="clear"></div>

<div class="grid_12 index-footer alpla omega">

    <h6><a id="more1" target="_blank" href="/welcome/artitle"></a><span class="h6_l"></span><span
            class="h6_r"></span></h6>

    <div class="bor3">
        <dl class="dtnav news">
            <dt>
                <span class="crumb">
                    <a class="t4"></a>
                </span>
                <span>
                    <a class="t5"></a>
                </span>
            </dt>
            <dd class="block">
                <ul>
                    <?php foreach($rec_artitles as $rt):?>
                    <?php
                        extract($rt);
                    ?>
                    <li>
                        <p><a href="/artitle/one/<?=$id?>"
                              title="<?=$name?>" target="_blank"><img
                                src="<?=$minipic?>"
                                alt="<?=$name?>"></a></p>

                        <p><a href="/artitle/one/<?=$id?>"
                              title="<?=$name?>"
                              target="_blank">
                               <?=$name?>
                              </a></p>
                    </li>
                    <?php endforeach;?>
                </ul>
            </dd>
            <dd>
                <ul>
                  <?php foreach($rec_services as $rcs):?>
                    <?php
                       extract($rcs);

                    ?>
                    <li>
                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/trends/one/<?=$id?>"
                                >
                            <img alt="<?=$name?>"
                                 src="<?=$minipic?>"
                                 ></a>
                        </p>

                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/trends/one/<?=$id?>"
                                ><?=$name?></a></p>
                    </li>
                  <?php endforeach?>

                </ul>
            </dd>
        </dl>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
<div class="clear"></div>
<div class="grid_12 index-footer">

    <h6><a id="more2" rel="nofollow" href="/welcome/movies" target="_blank"></a><span
            class="h6_l"></span><span class="h6_r"></span></h6>

    <div class="bor3">
        <dl class="dtnav community">
            <dt> <span class="crumb">
                    <a class="t6"></a>
                 </span>
                <span>
                    <a class="t7"></a>
                </span>
            </dt>
            <dd class="block">
                <ul>
                    <?php foreach($rec_videos as $rcs):?>
                    <?php
                    extract($rcs);

                    ?>
                    <li>
                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/video/one/<?=$id?>"
                                >
                            <img alt="<?=$name?>"
                                 src="<?=$minipic?>"
                                    ></a>
                        </p>

                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/video/one/<?=$id?>"
                                ><?=$name?></a></p>
                    </li>
                    <?php endforeach?>

                </ul>
            </dd>
            <dd>
                <ul>
                    <?php foreach($rec_subjects as $rcs):?>
                    <?php
                    extract($rcs);

                    ?>
                    <li>
                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/trends/one/<?=$id?>"
                                >
                            <img alt="<?=$name?>"
                                 src="<?=$minipic?>"
                                    ></a>
                        </p>

                        <p><a rel="nofollow" title="<?=$name?>"
                              href="/trends/one/<?=$id?>"
                                ><?=$name?></a></p>
                    </li>
                    <?php endforeach?>
                </ul>
            </dd>
        </dl>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
<div class="clear"></div>
<div class="grid_12 index-footer">

    <h6><a id="more3" rel="nofollow" href="/welcome/artitle" target="_blank"></a><span
            class="h6_l"></span><span class="h6_r"></span></h6>

    <div class="bor3">
        <dl class="dtnav community">
            <dt>
                <span class="crumb">
                    <a class="t17"></a>
                </span>
            </dt>
            <dd class="block">
                <ul>


                    <?php foreach($coagents as $rcs):?>
                    <?php
                    extract($rcs);

                    ?>
                    <li>
                        <p><a rel="nofollow" title="<?=$name?>"
                              href="<?=$href?>"
                                >
                            <img alt="<?=$name?>"
                                 src="<?=$minipic?>"
                                    ></a>
                        </p>

                        <p><a rel="nofollow" title="<?=$name?>"
                              href="<?=$href?>"
                                ><?=$name?></a></p>
                    </li>
                    <?php endforeach?>

                </ul>
            </dd>

        </dl>
    </div>
    <div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>

</div>
<div class="clear"></div>