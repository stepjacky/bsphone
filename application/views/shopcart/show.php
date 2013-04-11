<link rel='stylesheet' href="/resources/styles/shopcart/style.css"  />
<link rel='stylesheet' href="/resources/styles/cart.css"  />
<div class="cartdiv">
    <div class="location">
        <small></small>

        <strong><a href="/" title="网站首页">网站首页</a>&gt;
            <a href="/phone/query" title="手机中心">手机中心</a>&gt;购物车</strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="bor4">
        <div class="flow"><p class="flow_1"></p></div>
    </div>
    <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>

</div>
<div class="grid_12">

<form action="/shopcart/ensurecart" method="post">
<table class="shopcart cart_bable">
<caption>我的购物车</caption>
    <thead>
    <tr>
        <th>货物</th>
        <th>货物描述</th>
        <th>货物单价</th>
        <th>数量</th>
        <th>货物总额</th>
        <th>管理</th>
    </tr>
    </thead>

    <tbody>
    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

    <?=form_hidden($i.'[rowid]', $items['rowid']); ?>

    <tr>
        <td>
            <a href="/phone/one/<?=$items['options']['bid']?>" target="_blank">

                <img src="<?=$items['options']['image']?>"
                     style="width: 70px;height: 90px;" alt="<?=$items['name']?>"  />
                <br/>
                <?=$items['name']?>
            </a>
        </td>
        <td>
            <?=$items['name']?>

        </td>
        <td>￥<?=$this->cart->format_number($items['price']); ?></td>

         <td>
             <a href='/shopcart/changeqty/<?=$items['rowid']?>/<?=$items['qty']+1?>'>+</a>
             <?=form_input(array('name' => $i.'[qty]'
             , 'value' => $items['qty']
             , 'maxlength' => '3'
             , 'size' => '5'
             , 'readOnly'=>'readOnly'
             )); ?>

             <a href='/shopcart/changeqty/<?=$items['rowid']?>/<?=$items['qty']-1?>'>-</a>


         </td>
        <td>￥<?=$this->cart->format_number($items['subtotal']); ?></td>
        <td><a href="/shopcart/remove/<?=$items['rowid']?>" class="removeitem">删除</a> </td>
    </tr>

    <?php $i++; ?>

    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <td>

            <a href='/phone/query'>
                <img src='/resources/images/index/goshopping.png' />
            </a>

        </td>

        <td colspan="4" >
            <strong>购物车总金额:￥
                <label style="color:red">
                <?=$this->cart->format_number($this->cart->total()); ?>
                </label>
            </strong>

        </td>
        <td style="float: right;border: none">

            <input type="image" src="/resources/images/index/ensurecart.png"  />

        </td>
    </tr>
    </tfoot>
</table>

</form>
</div>
<div class="clear"></div>