<link rel='stylesheet' href="/resources/styles/shopcart/style.css"  />
<link rel='stylesheet' href="/resources/styles/cart.css"  />
<div id="content">
<div class="cartdiv">
    <div class="location">
        <small></small>
        <strong><a href="/" title="网站首页">网站首页</a>&gt;<a href="/phone/query" title="手机中心">手机中心</a>&gt;购物车</strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="bor4">
        <div class="flow"><p class="flow_3"></p></div>
    </div>
    <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>

<div class="layoutdiv">
<div class="round ">
<div class="roundtop"><span class="roundtop_l"></span><span class="roundtop_r"></span></div>

<div class="round_bor">

<div class="cart_content">
<div>
    <h2><img src="/resources/images/index/cart_title3.gif"></h2>
    <div class="cart_bor">
        <?php if($address):?>


        <div class="receipt_save">
            <p><strong>收货人姓名：</strong><small><?=$address['username']?></small></p>
            <p><strong>地址：</strong><small><?=$address['address']?></small></p>
            <p><strong>联系手机：</strong><small><?=$address['phone']?></small></p>
            <p><strong>电子邮箱：</strong><small><?=$address['email']?></small></p>
            <p><strong>邮政编码：</strong><small><?=$address['postcode']?></small></p>

        </div>
        <?php else: ?>


        <?php endif;?>
        <p style="text-align: right">
            <a href="/profile/basic">
                <img  src="/resources/images/index/defaultaddr.png" />
            </a>

        </p>

    </div>
</div>
<form action="/porder/index" method="post">
    <input  name="token" type="hidden" value="<?=$token?>"  />
<div id="region_off"> <h2><img src="/resources/images/index/cart_title5.gif" alt=""></h2>
    <div class="total">
        <table class="cart_bable">
            <tbody><tr>
                <th>名称</th>
                <th>描述</th>
                <th>费用</th>
                <th>保价费用</th>
            </tr>

            <tr>
                <td class="alignLeft">
                    <label>
                        <input type="radio" name="deliver" value="EMS@30"  />
                       EMS快递
                    </label>
                </td>
                <td>建议三级以下城市和顺丰不支持的地区选择。</td>
                <td><em id="sf_10">¥30 </em></td>
                <td>统一保价500元，总邮资已包含保价费用</td>

            </tr>

            <tr>
                <td class="alignLeft"><label>
                        <input type="radio" name="deliver" checked="checked" value="EXPRESS@20" />
                       顺丰快递                                            </label>
                </td>
                <td>建议支持顺丰快递的地区选择，快递速度一般比EMS快。</td>
                <td><em id="sf_16">¥20 </em></td>
                <td>邮费默认为到付,广东省内15元,省外25元.统一保价400元</td>

            </tr>
            <tr>
                <td class="alignLeft"><label>
                        <input type="radio" name="deliver" value="POST@15" />
                              其他                                  </label>
                </td>
                <td></td>
                <td><em id="sf_16">¥15 </em></td>
                <td></td>

            </tr>
            <tr>
                <td class="alignLeft"><label>
                        <input type="radio" name="deliver" value="POST@0" />
                                     免费[自己上门提货]                          </label>
                </td>
                <td></td>
                <td><em id="sf_16">¥0</td>
                <td></td>

            </tr>

            <tr>

                <td colspan="4">
                    <label style="color:red">
                   <?= isset($_GET['info'])?$_GET['info']:''?>

                </label>
                </td>

            </tr>

            </tbody>

        </table>
    </div>
</div>

<div><h2><img src="/resources/images/index/cart_title6.gif" alt=""></h2>
    <table class="shopcart cart_bable">
        <caption>我的订单</caption>
        <thead>
        <tr>
            <th>货物</th>
            <th>货物描述</th>
            <th>货物单价</th>
            <th>数量</th>
            <th  style="width: 100px">货物总额</th>
        </tr>
        </thead>

        <tbody>
        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>

            <tr>
                <td>
                    <a href="/phone/one/<?=$items['options']['bid']?>">
                    <img src="<?=$items['options']['image']?>"
                         style="width: 70px;height: 90px;"
                         alt="<?=$items['name']?>"  />
                        <br/>
                        <?=$items['name']?>
                    </a>
                </td>
                <td>
                    <?=$items['name']?>

                </td>
                <td>￥<?=$this->cart->format_number($items['price']); ?></td>

                <td>
                    <?=$items['qty']?>

                </td>
                <td>￥<?=$this->cart->format_number($items['subtotal']); ?></td>

            </tr>

            <?php $i++; ?>

        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" >
                <strong>购物车总金额:￥
                    <label style="color:red">
                        <?=$this->cart->format_number($this->cart->total()); ?>
                    </label>
                </strong>

            </td>
            <td style="float: right;border: none">

                <input type="image" src="/resources/images/index/check.png"  />

            </td>
        </tr>
        <tr>
           <th><label>订单说明</label></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>

        </tr>
        <tr>
           <th colspan="5">
              <textarea name='remark' style="width: 910px;height: 50px"></textarea>

           </th>

        </tr>
        </tfoot>
    </table>
</div>
</form>


<div class="receipt_bnt">
    <input type="button"  onclick="window.location.href='/shopcart/index/<?=getGUID()?>';"
           title="点击返回上一步！" id="prev_step_Btn" class="cart_bnt6">

</div>
<div style="text-align:center;">温馨提示：购物必须使用本网站连接支付,切勿使用外部连接支付,谨防受骗!</div>
</div>
</div>




<div class="roundbot"><span class="roundbot_l"></span><span class="roundbot_r"></span></div>
</div>
</div>


</div>
