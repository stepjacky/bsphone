<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="/resources/jquery-1.8.2.js"></script>

    <script type="text/javascript" charset="utf-8" src="/resources/jquery-blockui/jquery.blockUI.js"></script>

    <script type="text/javascript" src="/resources/ckfinder/ckfinder.js"></script>

    <link type="text/css" href="/resources/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" />

    <link type="text/css" href="/resources/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link type="text/css" href="/resources/bootstrap/css/datepicker.css" media="screen" rel="stylesheet" />

    <link href="/resources/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/resources/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/resources/bootstrap/js/bootstrap-datepicker.js"></script>

    <style>
        body{
            padding-top: 50px;
        }
        #main-panel{
            min-height: 500px;
            height: auto;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">BE数码通信后台管理</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="/admin/index" >系统设置</a></li>
                    <li class="active"><a href="/picture/index" >图片管理</a></li>
                    <li class="active"><a href="/admin/index/phone">手机管理</a></li>
                    <li class="active"><a href="/admin/index/news">新闻视频管理</a></li>
                    <li class="active"><a href="/admin/index/order">订单管理</a></li>
                    <li class="active"><a href="/" target="_blank">回到首页</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a data-toggle="dropdown"
                       class="dropdown-toggle"
                       href="#"><?=$adminName?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/modify">修改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="#">注销</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
