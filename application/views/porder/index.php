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
            <div class="flow"><p class="flow_4"></p></div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>

    <div class="layoutdiv">
        <div class="round ">
            <form method="post" action="/pay/request_alipay">
                <div class="roundtop"><span class="roundtop_l"></span><span class="roundtop_r"></span></div>
                <div class="round_bor">
                    <div class="cart_content">

                        <h2><img src="/resources/images/index/cart_title7.gif" alt=""></h2>
                        <div class="total">
                            <table class="done">
                                <tbody><tr>
                                    <td><strong>订单编号:</strong><?=$porder['id']?>
                                    </td>
                                    <td><strong>订货时间:</strong>
                                       <?=$porder['firedate']?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>收货人姓名:</strong><?=$porder['consignee']?></td>
                                    <td><strong>收货人E-mail:</strong><?=$porder['email']?></td>
                                </tr>
                                <tr>
                                    <td><strong>联系电话:</strong><?=$porder['phone']?></td>
                                    <td><strong>收货人邮编:</strong><?=$porder['postcode']?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>收货人地址:</strong><?=$porder['address']?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>备注:</strong>
                                       <?=$porder['remark']?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>订单商品:</strong>

                                          <?php foreach($pdetails as $dtl):?>
                                            <?=$dtl['pdtname']?> ,
                                          <?php endforeach;?>


                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>商品总金额:</strong><em>¥<?=$total_fee;?></em></td>
                                </tr>
                                <tr>
                                    <td><strong>配送方式:</strong><?=$deliver?></td>


                                </tr>
                                <tr>
                                    <td><strong>配送费用:</strong><em>
                                            ¥ <?=$porder['deyfee']?>
                                        </em></td>

                                </tr>
                                <tr>
                                    <td colspan="2"><strong>
                                            订单总金额=商品费用+邮费=</strong><font>

                                            ¥<?=$porder_total_fee?>+¥<?=$porder['deyfee']?>
                                            =¥<?=$porder_total_fee+$porder['deyfee']?>

                                        </font></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="done_bnt">
                                        <input type="hidden" name="WIDout_trade_no" value="<?=$porder['id']?>">
                                        <input type="hidden" name="WIDsubject" value="<?=$porder_name?>">
                                        <input type="hidden" name="WIDprice"   value="<?=$porder_total_fee?>">
                                        <input type="hidden" name='WIDDeliver' value="<?=$porder['deymodel']?>" />
                                        <input type="hidden" name="WIDbody" value="<?=$porder['remark']?>" >
                                        <input type="hidden" name="WIDreceive_name" value="<?=$porder['consignee']?>" >
                                        <input type="hidden" name="WIDreceive_address" value="<?=$porder['address']?>" >
                                        <input type="hidden" name="WIDreceive_zip" value="<?=$porder['postcode']?>" >
                                        <input type="hidden" name="WIDreceive_phone" value="<?=$porder['phone']?>" >
                                        <input type="hidden" name="WIDreceive_mobile" value="<?=$porder['phone']?>" >
                                        <input type="hidden" name="WIDdeliver_fee" value="<?=$porder['deyfee']?>" >

                                        <input type="submit" name="done_Btn" value="" title="请点击跳转到[支付宝]网站并进行在线支付操作！" id="done_Btn" class="cart_bnt7">
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>

                    </div>
                </div>
                <div class="roundbot"><span class="roundbot_l"></span><span class="roundbot_r"></span></div>
            </form>
        </div>
    </div>
     </div>