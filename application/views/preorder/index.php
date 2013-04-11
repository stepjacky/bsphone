<div id="content">
    <div class="location">

        <strong><a href="/">网站首页</a>&gt;网上手机购买预约</strong>
        <span class="location_l"></span><span class="location_r"></span>
    </div>
    <div class="layoutdiv">
        <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
        <div class="bor4">
            <div class="reserve">
                <h2>
                    <small>
                        <input type="button" onclick="window.open('/profile/preorder')" name="" value="" class="reserve_bnt5">
                    </small>
                    <img alt="" src="http://www.vgooo.com/images/ui/reserve_title.gif">
                </h2>
                <div class="reserve_caption">为了节省客户购买手机的等待时间，以人为本，我们开通了购机预约服务，现在您只需要在我们官方网站上预约购机，我们将会在您预定的时间内准备好手机。届时您只需要在预约好的时间上门就可以直接取机，不用浪费您的宝贵时间。</div>

                <dl class="reserve_1">
                    <dt>方法一：(电话下单）</dt>
                    <dd class="reserve_process"><img src="http://www.vgooo.com/images/ui/reserve_icon1.gif"></dd>
                </dl>

                <dl class="reserve_1">
                    <dt>方法二：(网站下单）</dt>
                    <dd class="reserve_process"><img src="http://www.vgooo.com/images/ui/reserve_icon3.gif"></dd>
                </dl>
                <dl class="reserve_2">
                    <dt><strong>预约购买的手机</strong></dt>
                    <dd>
                        <table id="961_32921" frame="void" class="reserve_bable">
                            <thead>
                            <tr>

                                <th width="160">商品名称</th>
                                <th width="200">取货地点</th>
                                <th width="90">取机时间</th>
                                <th width="90">用户名</th>
                                <th width="90">电话</th>
                                <th>数量</th>
                                <th>删除</th>
                            </tr>

                            </thead>

                            <tbody id="orderBody">
                               <?php foreach($data['beans'] as $bean):
                                   extract($bean);
                               ?>
                                 <tr>
                                     <td><?=$phone_name?></td>
                                     <td><?=$address?></td>
                                     <td><?=$firedate?></td>
                                     <td><?=$username?></td>
                                     <td><?=$mobile?></td>
                                     <td><?=$amount?></td>
                                     <td>
                                        <a href="/preorder/remove/<?=$id?>" target="_self">
                                                   删除
                                        </a>

                                     </td>
                                 </tr>

                               <?php endforeach;?>
                            </tbody>

                        </table>
                    </dd>
                </dl>
                <form id="porderform" action="/preorder/add_order" method="post">
                <dl class="reserve_2">
                    <dt ><strong>预约购买的手机</strong></dt>
                    <dd>
                        <input type="text" name="phone_name"  />

                    </dd>
                </dl>
                <dl class="reserve_2">
                    <dt ><strong>数量</strong></dt>
                    <dd>
                        <input type="text" name="amount"  />

                    </dd>
                </dl>
                <dl class="reserve_2">
                    <dt ><strong>预约购买地点</strong></dt>
                    <input type="text" name="address" style="width: 300px" />
                </dl>
                <dl class="reserve_2">
                    <dt><strong>预约购买的时间</strong></dt>
                    <dd>
                        <input type="text" name="firedate" class="datepicker" readonly="readonly" />
                    </dd>
                </dl>
                <dl class="reserve_2">
                    <dt id="user_null"><strong>我的信息</strong></dt>

                    <dd>
                        <div class="my_fo">
                            <p>
                            <span>姓名：<input type="text"  name="username" /></span>
                            </p>
                            <p>
                                <span>电话：<input type="text"  name="mobile" id="mobile"></span>

                            </p>
                        </div>


                    </dd>
                </dl>

                    <dl class="reserve_2">
                        <dt >

                        <div class="reserve_bnt">
                            <input type="reset"  value="" class="reserve_bnt1">
                            <input type="submit" value="" class="reserve_bnt2">
                        </div>

                        </dt>

                    </dl>

                </form>
            </div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>
</div>
<div id="menuContent" class="menuContent" style="display:none; position: absolute; background-color:#a3d7ff;border: #000000 1px dotted">
    <ul id="stypeTree" class="ztree" style="margin-top:0; width:160px;"></ul>
</div>
<div id="shopContent" class="menuContent" style="display:none; position: absolute; background-color: #a3d7ff;border: #000000 1px dotted">
    <ul id="shopTree" class="ztree" style="margin-top:0; width:160px;"></ul>
</div>

<link href='/resources/jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.css' rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/resources/jquery-ui/js/jquery-ui-1.9.1.custom.js"></script>
<script type="text/javascript" src="/resources/jquery-ui/js/jquery.ui.datepicker-zh-CN.js"></script>

<script type="text/javascript" src='/resources/timepicker/js/jquery-ui-timepicker-addon.js'></script>
<script type="text/javascript" src="/resources/scripts/util.js"></script>
<link rel="stylesheet" href="/resources/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css" />
<script type="text/javascript" src="/resources/zTree/js/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="/resources/scripts/preorder/edit.js"></script>
