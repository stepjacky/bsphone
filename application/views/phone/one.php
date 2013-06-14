<link rel="stylesheet" href="/resources/FlexSlider/flexslider.css" type="text/css"  />
<script type="text/javascript" src="/resources/FlexSlider/jquery.flexslider.js"></script>


<?php
extract($bean);
?>
<div class="grid_12 location ">
    <small></small>
    <strong><a href="/">网站首页</a>&gt;<a href="/phone/query">手机中心</a>&gt;<a
            href="/phone/one/<?=$id?>"><?=$brand?></a>&gt;<?=$name?></strong>
    <span class="location_l"></span><span class="location_r"></span>
</div>
<div class="clear"></div>
<div class="grid_12">
    <h1>
        <small>[被关注<em id="browse_click"><?=$moods?></em>次 ]</small><?=$aliasName?><span class="h1_l"></span><span
            class="h1_r"></span></h1>
    <div class="bor4">
        <div class="mainshow">
            <div class="detail">
                <h2>产品参数</h2>
                <table align="center" border="0">
                    <tbody>
                    <tr>
                        <td valign="center" align="center" title="操作系统">
                            <img src="/resources/images/index/system.gif" alt="操作系统">

                            <p><?=$os?></p>
                        </td>
                        <td valign="center" align="center" title="屏幕尺寸">
                            <img src="/resources/images/index/screensize.gif" alt="屏幕尺寸">

                            <p><?=$screen?>英寸</p>
                        </td>
                        <td valign="center" align="center" title="屏幕分辨率">
                            <img src="/resources/images/index/resolution.gif" alt="屏幕分辨率">

                            <p><?=$screenx?>x<?=$screeny?></p>
                        </td>
                        <td valign="center" align="center" title="摄像头">
                            <img src="/resources/images/index/camera.gif" alt="摄像头">

                            <p><?=$carame?>万</p>
                        </td>
                        <td valign="center" align="center" title="电池容量">
                            <img src="/resources/images/index/cell_capacity.gif" alt="电池容量">

                            <p><?=$cellcap?>Ah</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="others">
                    <h2>标准配置</h2>

                    <p style="display: block;" id="vt_3">
                        <?=$feature?>
                    </p>
                </div>
                <dl class="fx">
                    <dt>
                    <p>&nbsp;分享到:</p>

                    <p>
                        <ul style="list-style: none;margin: 0">
                          <li style="display:inline;float:left;width: 20px">
                              <wb:share-button count="n"  appkey="1047254860" relateuid="2623384347" ></wb:share-button>


                          </li>

                          <li style="display:inline;float:left;width: 20px">

                              <script type="text/javascript">
                                  (function(){
                                      var p = {
                                          url:location.href,
                                          showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
                                          desc:'',/*默认分享理由(可选)*/
                                          summary:'这里有<?=$name?>,还不错,来看看吧',/*分享摘要(可选)*/
                                          title:document.title,/*分享标题(可选)*/
                                          site:'',/*分享来源 如：腾讯网(可选)*/
                                          pics:'', /*分享图片的路径(可选)*/
                                          style:'203',
                                          width:22,
                                          height:22
                                      };
                                      var s = [];
                                      for(var i in p){
                                          s.push(i + '=' + encodeURIComponent(p[i]||''));
                                      }
                                      document.write(['<a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
                                  })();
                              </script>
                              <script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
                          </li>

                          <li style="display:inline;float:left;width: 20px;margin-top: -2px">
                              <script type="text/javascript" charset="utf-8">
                                  (function(){
                                      var kx_width = 22;
                                      var kx_height = 20;
                                      var param = {
                                          url:location.href, //分享网址
                                          content:'这里有<?=$name?>,还不错,过来看看吧', //(可选)需要分享的文字，当文字为空时，自动抓取分享网址的title
                                          pic:'', //(可选)分享的图片,多个使用半角逗号分隔
                                          starid:'',//(可选)公共主页id
                                          aid:'',  //(可选)显示分享来源
                                          showcount:0,//是否显示分享数
                                          style:1//显示样式
                                      }
                                      var arr = [];
                                      for( var tmp in param ){
                                          arr.push(tmp + '=' + encodeURIComponent( param[tmp] || '' ) )
                                      }
                                      document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://www.kaixin001.com/rest/records.php?'+arr.join('&')+'" width="'+kx_width+'" height="'+kx_height+'"></iframe>')
                                  })()
                              </script>
                          </li>
                        </ul>



                    </p>
                    <p><a href="/video/phone/<?=$name?>">&gt; 有<em><?=$vcount?></em>个视频</a></p>
                    </dt>
                    <?php foreach($videos as $vdo):?>
                    <?php
                         extract($vdo);

                    ?>
                    <dd style="padding-top: 20px;">

                        <p>
                            <a target="_blank" href="/video/one/<?=$id?>">
                                <img src="<?=$minipic?>" alt="<?=$name?>">
                            </a>
                        </p>
                        <span><img src="/resources/images/index/orig.png"></span>
                        <i><img src="/resources/images/index/new.gif"></i>
                    </dd>
                    <?php endforeach;?>

                </dl>
            </div>

            <dl class="image">
                <dt>
                    <a href="<?=$largepic?>" >
                        <img src="<?=$largepic?>"  class="big" id="main-img" />

                    </a>

                </dt>
                <dd>
                    <div class="flexslider">
                        <ul class="slides">

                            <?php foreach ($piclist as $pic) : ?>
                            <li>

                                <a href="#" >
                                    <img src="<?=$pic['path']?>" alt="<?=$name?>" style="width: 60px; height: 40px"/>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </dd>
            </dl>

           <form method="post" action="/shopcart/add">
               <input  name='image'  type='hidden' value='<?=$bean['minipic']?>'  />
               <input  name='id'     type='hidden' value='<?=$bean['id']?>'  />
               <input  id='prcid'    name='prcid'  type='hidden' />
            <div class="price">



                <div id="priceshow" class="sell show">
                    <h2><a></a>产品售价</h2>


                    <?php if($pstatus==0):

                        $set_price=FALSE;

                        ?>

                    <?php foreach ($prices as $pc): ?>
                    <p>

                        <?php if(!$set_price){?>
                            <script type="text/javascript">
                               // $('#prcid').val('<?=$pc['price']?>');
                            </script>
                        <?php } ?>


                        <input type="radio" name="priceF"
                             <?php if(!$set_price){
                            $set_price=TRUE;
                             //checked="checked"
                              ?>




                              <?php } ?>
                               value="<?=$pc['id']?>" class="vt_3"
                               onclick="$('#prcid').val(this.value)"/>
                        <label for="<?=$pc['name']?>-<?=$pc['price']?>" class="lab"><?=$pc['name']?>：
                            <em><?=$pc['price']?></em>元</label>
                    </p>
                    <?php   endforeach; ?>
                    <?php elseif($pstatus==-1):?>
                               该机型已下架
                    <?php else:?>
                                 机型未上市
                    <?php endif;?>
                </div>

                <div class="buy">
                    <p class="buy_bnt">


                        <input type="submit" name="" value="" class="online_buy">
                 <span class="save_bnt"
                       onmouseover="$(this).addClass('hover')"
                       onmouseout="$(this).removeClass('hover')"
                     >
                  <input type="button" name="" class="save">
                  <small>
                      <i>
                          持VIP卡购买手机可优惠20元
                          <a target="_blank" href="/welcome/vip">
                              <img src="/resources/images/index/vip_1.png" title="如何成为金卡会员" alt="如何成为金卡会员"></a>
                      </i>
                      <i>
                      在线邮购使用购物基金可抵扣20元<a target="_blank"
                                               href="/helpinfo/one/C942D65E-F8E6-0476-9897-E70C093572F4">
                          <img src="/resources/images/index/jijin.jpg" title="基金是什么" alt="基金是什么"></a>
                      </i>
                  </small>
                </span>

                     <input type="button"
                            onclick="window.open('http://sighttp.qq.com/authd?IDKEY=5a34fa8867f404b36f0508a8949c55697fb75ef3f7056c11', '_blank');" name="" class="zx2">

                    </p>



                    <p class="fs"><strong>付款方式</strong>
                        <br>
                        <a href="/helpinfo/one/F392D31A-E76E-B6E8-0C7A-ABCDCD639227"
                             target="_blank">分期付款</a>
                        <a rel="nofollow" href="/helpinfo/one/A034E211-E555-696B-965A-7D2FECC8B8C8"
                             target="_blank">银行帐号</a>
                        <a rel="nofollow" href="/helpinfo/one/461DB0E7-000A-FA0D-ED04-2E858D0B7692"
                             target="_blank">支付宝</a>
                        <a rel="nofollow" href="/helpinfo/one/4636092A-9460-E8D0-4EC4-7B6236C8ACC2"
                           target="_blank">货到付款</a>
                        <span>
                            <a href="/preorder"> 预约购机</a></span></p>
                </div>
            </div>
               <?php if(isset($_GET['info']) && !empty($_GET['info']) ):?>

                   <script type="text/javascript">
                       var i=5;
                       (function(){
                           $("#priceshow")
                               .fadeOut(100).fadeIn(100);
                           var t = setTimeout(arguments.callee,200);
                           if((i--)<=0) clearTimeout(t);
                       })();
                   </script>


               <?php endif;?>
           </form>
        </div>
    </div>
    <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    <div><a name="hrre"></a></div>
</div>
<div class="clear"></div>
<div class="grid_12 layoutdiv ">
<h4 style="margin-top:20px;"><span class="h4_l"></span><span class="h4_r"></span></h4>

<div class="bor3">
<dl class="dtnav mobile_info">
<dt class="a">
    <span id="jieshao_cru" class="crumb"><a class="t8"></a></span>
    <span id="news_cru"><i class="sm_l"></i><a style="width:auto;">有<em><?=$vcount + $atcount?></em>篇新闻视频</a><i
            class="sm_r"></i></span>
    <span id="help_cru"><a class="t10"></a></span>
    <span id="fuwu_cru"><a class="t11"></a></span>
    <small id=""><i class="sm_l"></i><a>有<em><?=val(count($comments))?></em>人发表了评论</a><i class="sm_r"></i></small>
    <small id="share_cru"><i class="sm_l"></i><a>有<em><?=val($shareslen)?></em>人分享了使用心得</a><i class="sm_r"></i></small>
</dt>
<dd id="jieshao">
    <div class="info_text">
        <?=$details?>
    </div>
    <div id="info_review" class="info_review">
        <div class="info_l">
            <h2><strong><a target="_blank" href="/phone/one/<?=$id?>">对<em><?=$name?></em>评论</a><a
                    name="hree"> </a></strong>
            </h2>

            <form action="/comment/add_for_phone/<?=$id?>" method='post'>
            <div id="info_review_form" class="info_review_form">
                <p>
                    <span class="textarea_bg">
                        <textarea  id="comment_content" name="content"></textarea></span>

                </p>

                <p>
                    <small>
                        <input type="submit" class="post_bnt" value="">
                    </small>
                    登录后发表您的高见，可获得0.1 购物基金<a target="_blank"
                                            href="/welcome/vip"><img
                        src="/resources/images/index/jijin.jpg"></a>
                </p>
            </div>
            </form>
            <div class="info_review_list">
                <ul id="comments_list">
                    <?php foreach ($comments as $cmt): ?>
                    <li>
                        <div class="info_list_l">
                            <img src="<?=$cmt['uatar']?>">
                        </div>
                        <div class="info_list_r">
                            <p><em><?=$cmt['nick']?></em></p>

                            <p><?=$cmt['ccnt']?></p>
                        </div>
                        <div>
                            <small></small>
                            <span>发表时间<a href="javascript:void(0)"><?=$cmt['firedate']?></a></span></small></div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="info_r">
            <h2><strong>精彩评论</strong></h2>
            <ul id="is_ok_list" class="most">

                <?php foreach ($mostcmts as $cmt): ?>
                <li>
                    <div class="most_l">
                        <img src="<?=$cmt['uatar']?>">
                    </div>
                    <div class="most_r">
                        <p><em><?=$cmt['nick']?></em></p>

                        <p><?=$cmt['ccnt']?></p>

                        <div>
                            <small><span>发表时间<a href="javascript:void(0)"><?=$cmt['firedate']?></a></span></small>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</dd>

<dd style="display: none;" id="news">
    <div class="layout">
        <div class="related_txt">
            <h2><span class="h2_l2"></span>

                <p><em><?=$name?></em>&nbsp;相关测评</p><span class="h2_r2"></span></h2>
            <div class="evaluation">
                <div class="evaluation_l"><a target="_blank" href="/artitle/one/<?=$mainartitle['id']?>">
                    <img src="<?=$mainartitle['minipic']?>" alt=""></a></div>
                <div class="evaluation_r">
                    <p><strong><a target="_blank"
                                  href="/artitle/one/<?=$mainartitle['id']?>"><?=$mainartitle['name']?></a></strong></p>

                    <p><?=$mainartitle['summary']?></p>
                </div>
            </div>
        </div>
        <div class="related_txt">
            <h2><span class="h2_l2"></span>

                <p><em><?=$name?></em>&nbsp;相关新闻</p><span class="h2_r2"></span></h2>
            <ul class="record_list">
                <?php foreach ($artitles8 as $a8): ?>

                <li>
                    <p><a target="_blank" href="/artitle/one/<?=$a8['id'];?>">
                        <img src="<?=$a8['minipic'];?>" alt=""></a></p>

                    <p><a href="/artitle/one/<?=$a8['id'];?>" target="_blank"><?=$a8['name'];?></a></p>
                </li>

                <?php endforeach;?>


            </ul>
        </div>
        <div class="related_txt">
            <h2><span class="h2_l2"></span>

                <p><em><?=$name?></em>&nbsp;相关视频</p><span class="h2_r2"></span></h2>
            <ul class="record_list">
                <?php foreach ($videos8 as $v8): ?>

                <li>
                    <p><a target="_blank" href="/video/one/<?=$v8['id']?>"><img src="<?=$v8['minipic']?>" alt=""></a>
                    </p>

                    <p><a target="_blank" href="/video/one/<?=$v8['id']?>"
                          title="点击查看[视频]<?=$v8['name']?>的更详细内容！">[视频]<?=$v8['name']?></a></p>
                </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>
</dd>

<dd style="display: none;" id="help">

</dd>

<dd style="display: none;" id="fuwu">
    <dl class="mobile_dl">
        <dt><img src="/resources/images/index/title13.gif" alt=""></dt>
        <dd class="dl_text">
            <a href="http://sh.vgooo.com/html/version/detail-.html"></a>
        </dd>
    </dl>
    <dl class="mobile_dl">
        <dt><img src="/resources/images/index/title14.gif" alt=""></dt>
        <dd class="dl_text">
            <div>
                <p style="font-size:14px;line-height: 20px;"><a target="_blank"
                                                                href="http://www.baidu.com/s?wd=<?=val($name)?>"><img
                        src="/resources/images/index/baidu.jpg" alt="百度"></a>&nbsp;&nbsp;&nbsp;<a target="_blank"
                       href="http://www.google.com.hk/search?hl=zh-CN&amp;source=hp&amp;biw=1680&amp;bih=895&amp;q=<?=val($name)?>&amp;aq=o&amp;a"><img
                        src="/resources/images/index/google.jpg" alt="谷歌"></a></p>
            </div>
        </dd>
    </dl>
    <dl class="mobile_dl">
        <dt><img src="/resources/images/index/title15.gif" alt=""></dt>
        <dd class="dl_text">
        </dd>
    </dl>
    <dl class="mobile_dl">
        <dt><img src="/resources/images/index/title18.gif" alt=""></dt>
        <dd class="dl_text">
            <ul class="tool_list">
                <li>
                    <p><a rel="nofollow" target="_blank"
                          href="/trends/one/61382ACE-C20A-C21F-4A09-D02C3CCFB782">保修条例</a>
                    </p>
                </li>
                <li>
                    <p><a rel="nofollow" target="_blank"
                          href="/trends/one/08D957B1-A51C-04CF-5618-5CE02CC1479F">处理流程</a></p>
                </li>
                <li>
                    <p><a rel="nofollow" target="_blank"
                          href="/trends/one/A3900DD3-F8CF-30D4-685E-F041CBF190D3">对外服务</a>
                    </p>
                </li>
            </ul>
        </dd>
    </dl>
</dd>
<dd style="display: none;" id="mell">

</dd>
<dd style="display: none;" id="share">
    <dl class="mobile_dl sharelist">
        <dt class="add_sharebnt">
        <div class="back_bnt"><a rel="nofollow"

           href="/sharedinfo/input/<?=val($bean['id'])?>/<?=val($bean['name'])?>"><img
                src="/resources/images/index/back_bnt.gif"></a></div>
        <a href="/shareinfo/more/<?=$name?>" target="_blank">分享记录 (<em><?=$shareslen?></em>)</a>
        </dt>

        <?php foreach ($shares as $shs): ?>
        <dd class="">
            <div name="#share_41792" class="dd_left">
                <img src="<?=$shs['avatar']?>">
                <label><?=$shs['nick'];?></label>
                <div class="info_vip">
                    <img alt="普通会员" src="/resources/images/index/vip_3.png">
                </div>
            </div>
            <div class="dd_right">
                <h2><?=$shs['name'];?> </h2>

                <div id="dd_right_content_41792" class="dd_right_content">
                    <div id="dd_right_txt_41792" class="dd_right_txt">
                        <div class="right_txtleft">
                            <strong>优点：</strong>
                            <?=$shs['virtue']?>
                        </div>
                        <div class="right_txtright">
                            <strong>缺点：</strong>
                            <?=$shs['defect']?>
                        </div>
                    </div>
                    <div class="back">
                        <small><?=date("y-M-d",strtotime($firedate))?></small>
                        <span>此评价对我</span>
                        <span><i class="back_l"></i><a
                                onclick="useful('<?=$shs['id']?>');">有用(<em><?=$shs['praise']?></em>)</a><i
                                class="back_r"></i></span>
                        <span><i class="back_l"></i><a
                                onclick="unuseful('<?=$shs['id']?>');">没用(<em><?=$shs['praise']?></em>)</a><i
                                class="back_r"></i></span>

                    </div>
                </div>

            </div>
        </dd>
        <?php endforeach;?>
    </dl>
</dd>
</dl>
</div>
<div class="bot5">
    <strong id="jieshao2_cru" class="crumb"><a class="t12"></a></strong>
    <strong id="news2_cru"><i class="sm_l"></i><a style="width:auto;">有<em><?=$vcount + $atcount?></em>篇新闻视频</a><i class="sm_r"></i></strong>
    <strong id="help2_cru"><a class="t14"></a></strong>
    <strong id="fuwu2_cru"><a class="t15"></a></strong>
    <small id=""><i class="sm_l"></i><a>有<em><?=val(count($comments))?></em>人发表了评论</a><i class="sm_r"></i></small>
    <small id="share_cru"><i class="sm_l"></i><a>有<em><?=val($shareslen)?></em>人分享了使用心得</a><i class="sm_r"></i></small>
    <span class="bot5_l"></span><span class="bot5_r"></span>
</div>

</div>
<div class="clear"></div>

<script type="text/javascript" src="/resources/scripts/phone/one.js"></script>
















