<link href="/resources/jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.css" rel="stylesheet" />
<link href="/resources/styles/user.css" rel="stylesheet" type="text/css"  />
<link href="/resources/styles/profile/index.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="/resources/jquery-ui/js/jquery-ui-1.9.1.custom.js"></script>
<script type="text/javascript" src="/resources/jquery-ui/js/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="/resources/scripts/profile/profile.js"></script>
<div id="content">
    <div class="user_title"><img src="http://www.vgooo.com/user/images/user/title1.gif"></div>
    <div class="layout">
        <h2 class="user_h2">
            <span name='index' ><i class="user_h2_l"></i><a href="/profile">会员首页</a><i class="user_h2_r"></i></span>
            <span name='basic'><i class="user_h2_l"></i><a href="/profile/basic">个人资料</a><i class="user_h2_r"></i></span>

            <span name='fund'><i class="user_h2_l"></i><a href="/profile/fund">我有<em>0.00</em>元购物基金</a><i class="user_h2_r"></i></span>
            <span name='myorder'><i class="user_h2_l"></i><a href="/profile/myorder">我的订单</a><i class="user_h2_r"></i></span>
            <span name='preorder'><i class="user_h2_l"></i><a href="/profile/preorder">预约订单</a><i class="user_h2_r"></i></span>

            <!--
            <span><i class="user_h2_l"></i><a href="http://www.vgooo.com/user/message?1823280919">短信息</a><i class="user_h2_r"></i></span>
            -->
        </h2>
<script type="text/javascript">
   var name = '<?=$pflag?>';
    $("span[name='"+name+"']").addClass('crumb');
</script>
