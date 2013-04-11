<div class="login">

<span   class="afterlogin">
        <img src="<?php echo $user["avatar"];?>" style="width:16px;height: 16px"/>
        Hi，<a href="/profile"><em><?=val($user['name'])?></em></a>&nbsp;
        <ins>|</ins>&nbsp;
        <a href="/welcome/logout">退出</a>
    </span>
    <dl class="tool_dd">
        <dt>
            <span><img src="/resources/images/index/tools_icon.gif"><a>网站工具</a></span>
        </dt>
        <dd>
            <div><span></span></div>
            <table>
                <tbody>
                <tr>
                    <td>
                        <p>
                            <a target="_blank" href="/welcome/vip" rel="nofollow">
                                <img src="/resources/images/index/tool_icon3.gif">
                            </a>
                            <br>
                            <a target="_blank" href="/welcome/vip" rel="nofollow">基金任务</a>
                        </p>
                    </td>
                    <td>
                        <p>
                            <a rel="nofollow" target="_blank" href="/helpinfo/index">
                                <img src="/resources/images/index/tool_icon4.gif">
                            </a>
                            <br>
                            <a rel="nofollow" target="_blank" href="/helpinfo/index">帮助中心</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><p><a target="_blank" href="/welcome/vip" rel="nofollow"><img src="/resources/images/index/tool_icon5.gif"></a><br><a target="_blank" href="/welcome/vip" rel="nofollow">VIP查询</a></p></td>
                    <td><p><a target="_blank" href="javascript:;" rel="nofollow"><img src="/resources/images/index/tool_icon7.gif"></a><br><a target="_blank" href="javascript:;" rel="nofollow">MODEL招聘</a></p></td>
                </tr>
                </tbody></table>
        </dd>
    </dl>
    <div style="display:none;" class="login_tips user_notice">
        <ul id="user_notice" style="margin-top: 0px;">
        </ul>
        <p><a><img src="/resources/images/index/close2.gif" class="notice_close"></a></p>
    </div>
</div>

