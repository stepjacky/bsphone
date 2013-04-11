<div class="user_bor">
        <div class="userdiv">

            <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
            <div class="bor5">
                <div class="user_index">
                    <div class="account_info">
                        <div class="account_info_l">
                            <p><img src="<?=val($avatar)?>"></p>
                            <p><a href="javascript:;" onclick="modifyAvatar();">修改头像</a></p>
                        </div>
                        <div class="account_info_r">
                            <div class="info_l">
                                <p class="debt"><?=val($id)?></p>
                            </div>
                        </div>
                    </div>

                    <h3><img src="http://www.vgooo.com/user/images/user/h3_title3.gif"></h3>
                    <div class="user_info">
                        <form id="userinfo">
                        <input name="id" type="hidden" value="<?=val($id)?>"     />
                        <ul>
                            <li>
                                <span>昵称</span> <input name='nick' value="<?=val($nick)?>"   class="user_txt3"/>
                            </li>
                            <li>
                                <span>密码</span> <input name='password' type="password" value="<?=val($password)?>"   class="user_txt3"/>
                            </li>

                            <li>
                                <span>姓名</span> <input name='name' value="<?=val($name)?>"      class="user_txt3"/>

                            </li>
                            <li>
                                <span>性别</span>
                                <input name='maled' type="radio" value="1" <?=$maled==1?"checked='true'":""?> />男
                                <input name='maled' type="radio" value="0" <?=$maled==0?"checked='true'":""?> />女

                            </li>
                            <li>
                                <span>手机</span>
                                <input name='myphone' value="<?=val($myphone)?>"  class="user_txt3"/>

                            </li>
                            <li>
                                <span>生日</span> <input name='birthday' value="<?=val($birthday)?>" readonly="readonly"    class="user_txt3 datepicker"/>
                            </li>
                        </ul>
                      </form>
                        <div class="save_bnt"><input type="button" id="add_bnt" value="" onclick="saveBasic()"/></div>
                    </div>

                </div>
            </div>
            <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
        </div>

    </div>


