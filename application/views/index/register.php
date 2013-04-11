<link href="/resources/styles/user.css" rel="stylesheet"  type="text/css"  />

<div class="content grid_12">
<div class="layoutdiv">
    <div class="round ">
        <div class="roundtop"><span class="roundtop_l"></span><span class="roundtop_r"></span></div>
        <div class="round_bor">
            <div class="user_logindiv">
                <h2><img src="/resources/images/index/login_title2.gif"></h2>
            <form action='/myuser/register' method="post">
                <div class="user_login_l">
                    <dl>
                        <dt>E-MAIL：</dt>
                        <dd class="crumb">
                            <p class="inputbg1"><input type="text" id="reg_email" name="id"></p>

                        </dd>
                    </dl>
                    <dl>
                        <dt>昵称：</dt>
                        <dd>
                            <p class="inputbg1"><input type="text"  id="nick_name" name="name"></p>

                        </dd>
                    </dl>
                    <dl>
                        <dt>密码：</dt>
                        <dd>
                            <p class="inputbg1"><input type="password"  id="reg_password" name="password"></p>

                        </dd>
                    </dl>
                    <dl>
                        <dt></dt>
                        <dd><input type="submit" class="login_bnt2" value=""></dd>
                        <dd><span class="errorinfo"><?=val($info)?></span></dd>
                    </dl>
                </div>
            </form>
                <div class="user_login_r">
                    <p><strong>使用合作账号登录</strong></p>
                    <p>

                        <a href="<?=$sina?>">
                           <img src="/resources/images/index/sina_login.png">
                        </a>

                    </p>
                    <p>

                        <a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=100339887&redirect_uri=http://www.bsphone.com/qqlogin">
                            <img src="/resources/images/index/Connect_logo_3.png" border="0" />
                        </a>

                    </p>
                    <p><a href="/user/login/alipay"><img src="/resources/images/index/pop_alipay.gif"></a></p>
                    <p>已有BE数码通讯帐号？<a href="/welcome/openlogin">立即登陆</a></p>
                </div>
            </div>
        </div>
        <div class="roundbot"><span class="roundbot_l"></span><span class="roundbot_r"></span></div>
    </div>
</div>
</div>
<div class="clear"></div>