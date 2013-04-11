<link href="/resources/styles/index/service.css" rel="stylesheet" type="text/css"   />
<link href="/resources/styles/index/sales.css" rel="stylesheet" type="text/css"   />
<div class="grid_12 service-head">

</div>
<div class="clear"></div>
<div class="content grid_12" style="margin-top:10px">

<div class="gzhu">
    <h6><a rel="nofollow" href="/welcome/serivcecenter"></a><img src="/resources/images/index/sales_title01.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
    <div class="gzhu_ceng">
       <?php foreach($topmovs as $mov):?>
        <?php
          extract($mov);
        ?>
        <div class="gzhu_lump">
            <div class="gzhu_chunk">
                <a title="<?=val($name)?>" target="_blank"
                   href="/trends/one/<?=val($id)?>">
                    <img width="156" height="106" alt="<?=val($name)?>"
                         src="<?=val($minipic)?>"></a>
            </div>
            <div class="gzhu_word">
                <a title="<?=val($name)?>" target="_blank"
                   href="/trends/one/<?=val($id)?>">
                    <?=val($name)?>
                </a>
            </div>
        </div>
       <?php endforeach;?>


    </div>
</div>
<div class="theleft">
    <div class="lump">
        <h6><a rel="nofollow" href="/welcome/servicecenter"></a><img src="/resources/images/index/sales_title02.png"><span class="h6_l"></span><span class="h6_r"></span></h6>

        <div class="kefu">
            <div class="anniu">
                <ul class="sales_left_ul">

                    <?php foreach($services as $ser):?>
                    <?php
                        extract($ser);
                     ?>
                    <li>
                        <p>
                            <strong><a title="<?=val($name)?>"
                                       href="/servicecenter/one/<?=val($id)?>"
                                       target="_blank"
                                       style="font-weight: bold; font-size: 13px; color: #FF6000">
                                <?=val($name)?></a></strong></p>
                        <p class="sales_left_p">
                            营业时间：<a target="_blank" title="<?=val($openninghours)?>"
                                    href="/servicecenter/one/<?=val($id)?>"><?=val($openninghours)?></a></p>
                        <p class="sales_left_p">
                            咨询电话：<a target="_blank" title="<?=val($phone)?>">

                             <?=val($phone)?>
                        </a></p>
                    </li>

                    <?php endforeach;?>

                </ul>
            </div>
            <div class="anniu">
                    <span>
                        <a title="手机上网教程" href="/welcome/service">
                        <img width="202" height="50" alt="手机上网教程" src="/resources/images/index/mobilenetsetting.gif">
                        </a>
                    </span>
                <span >
                    <a title="保修条例" href="/welcome/service">
                <img width="202" height="50" alt="保修条例" src="/resources/images/index/sale_06.jpg">
                    </a> </span>
                    <span ><a title="维修条例" href="/welcome/service">
                        <img width="202" height="50" alt="维修流程" src="/resources/images/index/sale_08.jpg"></a> </span>
                    <span "><a title="对外服务" href="/welcome/service">
                        <img width="202" height="50" alt="对外服务" src="/resources/images/index/sale_10.jpg"></a> </span>
            </div>
            <div class="zixun">
                <a target="_blank" href="http://sighttp.qq.com/authd?IDKEY=5a34fa8867f404b36f0508a8949c55697fb75ef3f7056c11">
                <img alt="" src="/resources/images/index/sale_zxzx.jpg"><br>
                    <!--
                    <img border="0"  src="http://wpa.qq.com/imgd?IDKEY=5a34fa8867f404b36f0508a8949c55697fb75ef3f7056c11&pic=41" alt="点击这里给我发消息" title="点击这里给我发消息">
                    -->
                </a>
           </div>
        </div>
    </div>
</div>
<div class="theright">
<div class="fasttips">
<h6><a rel="nofollow" href="/welcome/service"></a><img src="/resources/images/index/sales_title03.png"><span class="h6_l"></span><span class="h6_r"></span></h6>

<div class="dizhi">
    <h1 align="center"><?=$bean['name'];?></h1>
    <hr />
    <?=$bean['content']?>
</div>

</div>
</div>
</div>
<div class="clear"></div>