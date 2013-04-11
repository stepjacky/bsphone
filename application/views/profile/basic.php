<div class="user_bor">
    <div class="userdiv">

        <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
        <div class="bor5">
            <div class="user_div">
                <div class="user_nav">
                    <ul>
                         <li class="crumb">修改收货地址</li>
                         <li class="crumb">
                           <?php if (isset($_GET['info'])):?>
                             请添加并设置一个默认收货地址
                           <?php endif;?>

                         </li>
                    </ul>
                </div>

                <div class="user_content">
                    <div class="address">
                        <h3><img src="http://www.vgooo.com/user/images/user/h3_title5.gif"></h3>
                        <a href="/shopcart/ensurecart">
                            <img
                                src="/resources/images/index/backpage.png"
                                />
                        </a>
                        <table class="addr-table">
                           <thead>
                             <tr>
                                 <th>姓名</th>
                                 <th>地址</th>
                                 <th>邮编</th>
                                 <th>电话</th>
                                 <th>邮件</th>
                                 <th>默认</th>
                                 <th>删除</th>

                             </tr>

                           </thead>
                           <tbody>
                           <?php foreach($address as $addr):?>
                           <?php
                               extract($addr);
                               ?>
                             <tr>
                                 <td><?=$username?></td>
                                 <td><?=$address?></td>
                                 <td><?=$postcode?></td>
                                 <td><?=$phone?></td>
                                 <td><?=$email?></td>
                                 <td>
                                   <input name='usedit' type="radio" <?=$usedit==1?"checked='true'":""?> />
                                   <button type="button" onclick="setDefaultAddr('<?=val($id)?>')">默认</button>
                                 </td>
                                 <td>
                                    <button type='button' onclick="removeAddr('<?=$id?>');" >X</button>

                                 </td>




                             </tr>


                           <?php endforeach;?>

                           </tbody>

                        </table>
                        </ol>
                    </div>

                    <div class="user_form">
                       <form id="addrform">
                        <input type="hidden" name='usedit' value="1"  />
                        <input type="hidden" name='myuser_username' value="<?=$user_id?>"  />
                        <p><img src="/resources/images/index/h3_title6.gif"></p>
                        <p>
                            <strong>收货人姓名:</strong>
                            <small><input type="text"  id="receive_name" name="username" class="user_txt3">
                                <label class="tips" id="receive_name_tips"><img id="receive_name_fault" src="http://www.vgooo.com/user/images/user/correct.gif"><em id="receive_name_fault_html"></em></label>
                            </small>
                        </p>
                        <p>
                            <strong>收货地址:</strong>
                            <small><input type="text"  id="receive_address" name="address" class="user_txt4">
                                <label class="tips" id="receive_address_tips"><img id="receive_address_fault" src="http://www.vgooo.com/user/images/user/correct.gif"><em id="receive_address_fault_html"></em></label>
                            </small>
                        </p>
                        <p><strong>邮政编码:</strong><small><input type="text" id="postalcode"  name="postcode" class="user_txt3">
                            <label class="tips" id="postalcode_tips"><img id="postalcode_fault" src="http://www.vgooo.com/user/images/user/correct.gif"><em id="postalcode_fault_html"></em></label>
                        </small></p>
                        <p><strong>电子邮箱:</strong><small><input type="text"  id="receive_email"  name="email" class="user_txt3">
                            <label class="tips" id="receive_email_tips"><img id="receive_email_fault" src="http://www.vgooo.com/user/images/user/correct.gif"><em id="receive_email_fault_html"></em></label>
                        </small></p>
                        <p><strong>手机号码:</strong>
                            <small><input type="text" id="receive_mobile" name="phone" class="user_txt3">
                                <label class="tips" id="receive_mobile_tips"><img id="receive_mobile_fault" src="http://www.vgooo.com/user/images/user/correct.gif"><em id="receive_mobile_fault_html"></em></label>
                            </small></p>
                       </form>
                    </div>
                    <div class="save_bnt"><input type="button" value=""  id="add_bnt" onclick="saveNewAddress()" ></div>
                </div>
            </div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>

</div>
