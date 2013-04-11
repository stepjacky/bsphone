<style type="text/css">
        /** 顶部导航 **/
    #topnav {
        background: #3a6ca4 url('/resources/images/menu/blue/bg.png') no-repeat;
        height: 38px;
        font-size: 13px;
    }
    .home {
        float: left;
        width:117px;
        height:35px;
    }
    .home a:hover {
        width:117px;
        height:36px;
        background: url('/resources/images/menu/blue/bg.png') 0 -38px;
    }
    #topnav.current_page_item , #topnav .current-menu-item {
        background: url('/resources/images/menu/blue/bg.png') repeat-x 0 -110px;
    }
    #topnav .current-menu-item a,#topnav .current_page_item a {
        color: #fff !important;
        text-shadow: 0px 1px 0px #000 !important;
    }
    #topnav .current-menu-item  li a,#topnav .sub-menu a ,#topnav .current_page_item li a {
        color: #393939;
    }
    .sub-menu a:hover {
        color: #0196e3 !important;
    }
    #topnav li {
        height:36px;
        border-right:1px solid #4b83c2;
        float: left;
        font-weight:bold;
    }
    #topnav li a, #topnav li a:link, #topnav li a:visited {
        display: block;
        padding: 0 25px 0 25px;
        line-height:36px;
        color: #f2f2f2;
        text-shadow: 0px 1px 0px #000;
    }
    #topnav li a:hover, #topnav li a:active {
        background: url('/resources/images/menu/blue/bg.png') repeat-x 0 -74px;
        color: #fff;
        display: block;
        text-decoration: none;
        line-height:36px;
        padding: 0 25px 0 25px;
        text-shadow: 0px 1px 0px #000 !important;
    }
    #topnav li li {
        height:30px;
        float: left;
    }
    #topnav li li a {
        line-height:30px !important;
    }
    #topnav li ul {
        position: absolute;
        left: -999em;
        width: 150px;
        margin: 0;
        border-width: 1px 1px 0px;
        z-index: 999;
    }
    #topnav  li ul li {
        border-top: 1px solid #74a9e4;
        border-bottom: 1px solid #032b62;
        border-right: none;
        border-left: none;
    }
    #topnav  li ul li a {
        background: #2d589e;
        width: 100px;
        height:30px;
        color: #fff !important;
        font-weight: normal;
        opacity: .80;
        filter: alpha(opacity=80);
        text-shadow: 0px 1px 0px #000 !important;
    }
    #topnav li ul li a:hover {
        text-shadow: 0px 1px 0px #fff !important;
    }
    #topnav .sf-sub-indicator {
        display: none;
    }
    #topnav  li ul li a.sf-with-ul {
        padding: 7px 12px;
    }
    #topnav  li ul li a:hover {
        background: #022c72;
        color: #fff !important;
        text-shadow: 0px 1px 0px #000 !important;
        text-decoration: none;
    }
    #topnav  li ul ul {
        margin: -31px 0px 0px 150px;
    }
    #topnav  li ul ul li a {}
    #topnav  li ul li ul li a {}
    #topnav  li:hover,#topnav  li.hover {
        position: static;
    }
    #topnav  li:hover ul ul, #topnav  li.sfhover ul ul,
    #topnav  li:hover ul ul ul, #topnav  li.sfhover ul ul ul,
    #topnav  li:hover ul ul ul ul, #topnav  li.sfhover ul ul ul ul {
        left: -999em;
    }
    #topnav  li:hover ul, #topnav  li.sfhover ul,
    #topnav  li li:hover ul, #topnav  li li.sfhover ul,
    #topnav  li li li:hover ul, #topnav  li li li.sfhover ul,
    #topnav  li li li li:hover ul, #topnav  li li li li.sfhover ul {
        left: auto;
    }

</style>
<div id="top">
    <div id="topnav">
        <div class="left_top ">
            <div class="home"><a class="home" title="首  页" href="http://lxy.me"></a></div>
            <div class="menu-%e6%81%8b%e9%a6%99%e7%bc%98%e8%8f%9c%e5%8d%95-container"><ul class="menu sf-js-enabled sf-shadow" id="menu-%e6%81%8b%e9%a6%99%e7%bc%98%e8%8f%9c%e5%8d%95"><li class="menu-item menu-item-type-taxonomy menu-item-object-category current-category-ancestor current-menu-ancestor current-menu-parent current-category-parent menu-item-43" id="menu-item-43"><a href="http://lxy.me/category/programlanguage" class="">编程语言<span class="sf-sub-indicator"> ?</span></a>
                <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-32" id="menu-item-32"><a href="http://lxy.me/category/programlanguage/php">PHP</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-25" id="menu-item-25"><a href="http://lxy.me/category/programlanguage/c">C#</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-27" id="menu-item-27"><a href="http://lxy.me/category/programlanguage/java">Java</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28" id="menu-item-28"><a href="http://lxy.me/category/programlanguage/javascript">JavaScript</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-29" id="menu-item-29"><a href="http://lxy.me/category/programlanguage/jquery">JQuery</a></li>
                </ul>
            </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-35" id="menu-item-35"><a href="http://lxy.me/category/sql" class="">SQL相关<span class="sf-sub-indicator"> ?</span></a>
                    <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31" id="menu-item-31"><a href="http://lxy.me/category/sql/mysql">MYSQL</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-34" id="menu-item-34"><a href="http://lxy.me/category/sql/sqlserver">SQLSERVER</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-40" id="menu-item-40"><a href="http://lxy.me/category/internet" class="">互联网相关<span class="sf-sub-indicator"> ?</span></a>
                    <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-33" id="menu-item-33"><a href="http://lxy.me/category/internet/seo">SEO</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-41" id="menu-item-41"><a href="http://lxy.me/category/internet/domainname">域名</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-42" id="menu-item-42"><a href="http://lxy.me/category/servers" class="">服务器相关<span class="sf-sub-indicator"> ?</span></a>
                    <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30" id="menu-item-30"><a href="http://lxy.me/category/servers/linux" class="">Linux<span class="sf-sub-indicator"> ?</span><span class="sf-sub-indicator"> ?</span></a>
                            <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26" id="menu-item-26"><a href="http://lxy.me/category/servers/linux/centos">CentOS</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-36" id="menu-item-36"><a href="http://lxy.me/category/servers/linux/ubuntu">Ubuntu</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-37" id="menu-item-37"><a href="http://lxy.me/category/servers/windows" class="">Windows<span class="sf-sub-indicator"> ?</span><span class="sf-sub-indicator"> ?</span></a>
                            <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-38" id="menu-item-38"><a href="http://lxy.me/category/servers/windows/windows2003">Windows2003</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-39" id="menu-item-39"><a href="http://lxy.me/category/servers/windows/windows2008">Windows2008</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-155" id="menu-item-155"><a href="http://lxy.me/category/programs" class="">程序研究<span class="sf-sub-indicator"> ?</span></a>
                    <ul class="sub-menu sf-js-enabled sf-shadow" style="display: none; visibility: hidden;">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113" id="menu-item-113"><a href="http://lxy.me/category/programs/joomla">Joomla</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-286" id="menu-item-286"><a href="http://lxy.me/category/programs/wordpress">WordPress</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-114" id="menu-item-114"><a href="http://lxy.me/category/programs/yiiframework">YIIFramework</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-44" id="menu-item-44"><a href="http://lxy.me/category/others">闲言碎语</a></li>
            </ul></div>
        </div>
        <!-- end: left_top -->
        <div id="searchbar">
            <form action="http://lxy.me/" id="searchform" method="get">
                <input type="text" class="swap_value" id="s" name="s">
                <input type="image" title="搜索" alt="Search" id="go" src="http://lxy.me/wp-content/themes/HotNewspro/images/go.gif">
            </form>			</div>
        <!-- end: searchbar -->
    </div>
    <!-- end: topnav -->
</div>