<div id="content">
<div class="layoutdiv">
<h6><img src="/resources/images/index/title-search.png"><span class="h6_l"></span><span class="h6_r"></span></h6>
<div class="bor4">
<div class="list3 jg">
<ul>
<?php foreach($beans as $bean):
    extract($bean);
    ?>
        <li>
            <p> <a href="/phone/one/<?=$id?>" title="<?=$name?>" target="_blank">
                    <img src="<?=$minipic?>" id="images_1294" alt="<?=$name?>">
                </a></p>
            <p class="name">
                <a href="/phone/one/<?=$id?>" title="<?=$name?>" target="_blank">
                    <?=$name?>                    </a>


            </p>
            <p class="pricediv">
                <?=$status==0?$price:($status<0?'已下架':'未上市')?>
               </p>
        </li>



<?php endforeach;?>
</ul>
</div>
</div>
<div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
</div>
 </div>