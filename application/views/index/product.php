<link href="/resources/styles/index/product.css" rel="stylesheet" />
<div class="grid_12">
<h3><span class="h3_l"></span><span class="h3_r"></span></h3>
<div class="bor4">
<dl class="mobile">
<dt>
<p class="dh"><span>快速选机</span></p>
</dt>
<dd>
<div class="fast"><em>排序</em>
    <span><a rel="nofollow" href="query?sort=firedate&sort_type=<?=$sort_type?><?=$qidx.$types?>">上市时间</a></span>
    <span><a rel="nofollow" href="query?sort=moods&sort_type=<?=$sort_type?><?=$qidx.$types?>">人气</a></span>
    <span><a rel="nofollow" href="query?sort=price&sort_type=<?=$sort_type?><?=$qidx.$types?>">价格</a></span>
</div>

<div class="opt">

    <p><span><img src="/resources/images/index/opt_1.gif" alt="品牌选择">品牌选择 ：</span>
        <a title="全部" href="query?brand=all<?=$brand;?>&qidxa=0<?=$qidxa;?>" qidxa="0" class="crumb">全部</a>
        <?php
             $bidx=1;
             foreach($brands as $brd):
               extract($brd);

            ?>

            <a href="query?brand=<?=$id?><?=$brand;?>&qidxa=<?=$bidx?><?=$qidxa;?>" qidxa="<?=$bidx?>" title="<?=$name?>"><?=$name?></a>

        <?php
             $bidx++;
             endforeach;
        ?>

    </p>
    <p><span><img src="/resources/images/index/opt_2.gif" alt="价格范围">价格范围 ：</span>
        <a title="全部" href="query?price=all<?=$price?>&qidxb=18<?=$qidxb;?>" qidxb="18" class="crumb">全部</a>
        <a href="query?price=1000-<?=$price?>&qidxb=19<?=$qidxb;?>" qidxb="19" title="1000以下">1000以下</a>
        <a href="query?price=1001-2000<?=$price?>&qidxb=20<?=$qidxb;?>" qidxb="20"  title="1001-2000">1001-2000</a>
        <a href="query?price=2001-3000<?=$price?>&qidxb=21<?=$qidxb;?>" qidxb="21" title="2001-3000">2001-3000</a>
        <a href="query?price=3001-4000<?=$price?>&qidxb=22<?=$qidxb;?>" qidxb="22" title="3001-4000">3001-4000</a>
        <a href="query?price=4001-5000<?=$price?>&qidxb=23<?=$qidxb;?>" qidxb="23" title="4001-5000">4001-5000</a>
        <a href="query?price=5001-6000<?=$price?>&qidxb=24<?=$qidxb;?>" qidxb="24" title="5001-6000">5001-6000</a>
        <a href="query?price=6000`<?=$price?>&qidxb=25<?=$qidxb;?>" qidxb="25" title="6001以上">6001以上</a>
    </p>
    <p><span><img src="/resources/images/index/opt_3.gif" alt="操作系统">操作系统 ：</span>
        <a title="全部" href="query?os=all<?=$price?>&qidxc=26<?=$qidxc;?>" qidxc="26" class="crumb">全部</a>

        <?php
        $qidx=27;
        foreach($oss as $oneos):
            extract($oneos);

            ?>

            <a href="query?os=<?=$id?><?=$os?>&qidxc=<?=$qidx?><?=$qidxc;?>" qidxc="<?=$qidx?>" title="<?=$name?>"><?=$name?></a>

            <?php
            $qidx++;
        endforeach;
        ?>

    </p>
    <p><span><img alt="屏幕尺寸" src="/resources/images/index/opt_4.gif">屏幕尺寸 ：</span>
        <a title="全部" href="query?screen=all<?=$screen?>&qidxd=h<?=$qidxd;?>" qidxd="h" class="crumb">全部</a>
        <a title="2.1英寸-3.5英寸" href="query?screen=2.1-3.5<?=$screen?>&qidxd=i<?=$qidxd;?>" qidxd="i">2.1英寸-3.5英寸</a>
        <a title="3.6英寸-4.0英寸" href="query?screen=4.1-4.0<?=$screen?>&qidxd=j<?=$qidxd;?>" qidxd="j" >3.6英寸-4.0英寸</a>
        <a title="4.1英寸-4.5英寸" href="query?screen=4.1-4.5<?=$screen?>&qidxd=k<?=$qidxd;?>" qidxd="k">4.1英寸-4.5英寸</a>
        <a title="4.6英寸-5.0英寸" href="query?screen=4.6-5.0<?=$screen?>&qidxd=l<?=$qidxd;?>" qidxd="l">4.6英寸-5.0英寸</a>
        <a title="5.1英寸-5.5英寸" href="query?screen=5.1-5.5<?=$screen?>&qidxd=m<?=$qidxd;?>" qidxd="m">5.1英寸-5.5英寸</a>
        <a title="5.5英寸以上" href="query?screen=5.5`<?=$screen?>&qidxd=n<?=$qidxd;?>" qidxd="n">5.5英寸以上</a>
    </p>
    <p><span><img alt="相机像素" src="/resources/images/index/opt_5.gif">相机像素 ：</span>
        <a title="全部" href="query?carame=all<?=$carame?>&qidxe=o<?=$qidxe;?>" qidxe="o" class="crumb">全部</a>
        <a title="30-100万" href="query?carame=30-100<?=$carame?>&qidxe=p<?=$qidxe;?>" qidxe="p">30-100万</a>
        <a title="130万-320万" href="query?carame=130-320<?=$carame?>&qidxe=q<?=$qidxe;?>" qidxe="q">130万-320万</a>
        <a title="500万-800万" href="query?carame=500-800<?=$carame?>&qidxe=r<?=$qidxe;?>" qidxe="r">500万-800万</a>
        <a title="1000万以上" href="query?carame=1000`<?=$carame?>&qidxe=s<?=$qidxe;?>" qidxe="s">1000万以上</a>
    </p>
    <p><span><img alt="其它功能" src="/resources/images/index/opt_6.gif">产品标签 ：</span>
        <a title="全部" href="query?tag=all<?=$tag?>&qidxf=t<?=$qidxf;?>" qidxf="t" class="crumb">全部</a>

        <?php
           $tidx =0;
        foreach($taglist as $tname){
              $tttg = "t".$tidx;
            ?>

          <a title="<?=$tname['name']?>"
             href="query?tag=<?=$tname['name']?><?=$tag?>&qidxf=<?=$tttg?><?=$qidxf;?>"
             qidxf="<?=$tttg?>"
             class=""><?=$tname['name']?></a>


        <?php

            $tidx++;

        }?>

    </p>
</div>
<div class="list3 separate">
<ul>

<?php foreach ($beans as $bean): ?>
<?php
    extract($bean);
?>
<li>
    <p><a title="<?=$name?>" href="one/<?=$id?>" target="_blank"><img alt="<?=$name?>" id="images_<?=$id?>" src="<?=$minipic?>"></a></p>
    <p class="name"><a title="<?=$name?>" id="prod_tag_<?=$id?>" href="one/<?=$id?>" target="_blank"><?=$name?></a></p>
    <div class="pricediv">
        <em id="price_1226">¥<?=$price?></em>

    </div>
    <p><input type="button"
              onclick="location.href='/phone/one/<?=$id?>';"
              value="购买" name="">
        <input type="button" onclick="saveCompareMobile('<?=$id?>','<?=$name?>','<?=$minipic?>');" value="比较" name="">
    </p>
</li>

    <?php endforeach; ?>
</ul>
</div>
</dd>
</dl>
</div>
<div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>
<div class="clear"></div>
<div class="grid_12">
    <h6><img src="/resources/images/index/title6.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
    <div class="bor4">
        <div class="list3 removebor">
            <ul>
              <?php foreach($wbeans as $b):
                   extract($b);
                ?>
                <li>
                    <p><a title="<?=$name?>"
                          href="one/<?=$id?>"
                          target="_blank">
                          <img alt="<?=$name?>"
                               src="<?=$minipic?>"></a></p>
                    <p class="name">
                        <a title="<?=$name?>" href="one/<?=$id?>"
                           target="_blank"><?=$name?></a></p>
                    <p>
                        <input type="button" onclick="saveCompareMobile('<?=$id?>','<?=$name?>','<?=$minipic?>');" value="比较" name="">

                    </p>
                </li>
              <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="bot1"><span class="bot1_l"></span><span class="bot1_r"></span></div>
</div>
<div class="clear"></div>
<div class="grid_12">
<h6><img src="/resources/images/index/title51.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
<div class="bor4">
<div class="list3 under">
<ul style="margin-top:5px;">
    <?php foreach($ebeans as $b):
        extract($b);
        ?>
        <li>
            <p class="name"><a title="<?=$name?>"   href="one/<?=$id?>"  target="_blank"><?=$name?> </a></p>
        </li>
    <?php endforeach;?>
</ul>
</div>
</div>
<div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>
<div class="clear"></div>



<div style="width: 350px; top: 898px; display:none;" id="basket" class="than">
    <h2>
        <strong>产品比较</strong>
        <small><input type="button" onclick="submitCompare()" name="" class="than_bnt"><a><img onclick="$('#basket').hide();" src="/resources/images/index/close.gif"></a></small>
    </h2>
    <div class="than_list">
        <div class="than_u">
            <ul style="left:0px;width:auto;" id="basketlist">

            </ul>
        </div>
    </div>
</div>
<form id='cmpform' target="_blank">
</form>

<link href='/resources/artdialog/skins/green.css' rel="stylesheet">
<script type="text/javascript" src="/resources/artdialog/jquery.artDialog.min.js"></script>
<script type="text/javascript" src="/resources/template.js"></script>

<script type="text/javascript">

    template.openTag = "<!";
    template.closeTag = "!>";

</script>

<script id="test" type="text/html">

    <li id="than_<!=id!>">
        <p>
            <a title="<!=name!>" href="/phone/one/<!=id!>">
                <img alt="<!=name!>" src="<!=minipic!>">
            </a>
        </p>
        <p>
            <a title="<!=name!>" href="/phone/one/<!=id!>"><!=name!></a>
        </p>
        <p>
            <input type="button" onclick="unsaveCompareMobile('<!=id!>');" value="移除">
        </p>
    </li>

</script>

<script type="text/javascript">



    var cmps = [];
    var num = 0;
    function submitCompare(){
        if(num<=1) {
            $.dialog('比较数量不能少于两个');
            return;
        }
        var nttr = [];
        for(var key in cmps){
            if(cmps[key]!=undefined)
            nttr.push(key);
        }
        var str = nttr.join('_');
        $("#cmpform").attr("action",'/phone/compares/'+str);
        $("#cmpform").get(0).submit();

    }

    function unsaveCompareMobile(id){
        delete cmps[id];
        num--;
        $("#than_"+id).remove();
        updatebasket();
    }

    function saveCompareMobile(id,name,minipic){
        $("#basket").show();
        if(num==3){
            $.dialog('比较数量不能超过三个');
            return;
        }
        if(cmps[id]!=undefined){
            return;
        }
        num++;
        var tdata = {
            'id':id,'name':name,'minipic':minipic
        };
        cmps[id] = tdata;
        updatebasket();
    }


    function updatebasket(){
        $("#basketlist").empty();
        for(var key in cmps){
            var data = cmps[key];
            if(data==undefined)
                continue;
            var html = template.render('test', data);
            $("#basketlist").append(html);
        }
        if(console){
            console.log(cmps);
            console.log(num);
        }
    }
</script>

<script type="text/javascript" src="/resources/scripts/index/product.js"></script>
<script type="text/javascript">
    <?php
    while($key = key($indexdb)){
        echo "setTagSelect('$key','".$indexdb[$key]."');\n";
        next($indexdb);
    }
    ?>
</script>