<div class="join_lump">

<div class="join_ceng">

    <div class="join_piece">
        <div class="join_title">
            <img width="199" height="50" title="加盟动态" alt="加盟动态" src="/resources/images/index/join_07.jpg">
            <a title="更多动态 &gt;&gt;" target="_blank" href="/join/join_active.aspx">更多动态 &gt;&gt;</a>
        </div>
        <div class="clerboth">
            &nbsp;</div>
        <div class="join_news">
            <ul>

                <?php foreach($trends as $trd):

                extract($trd);

                ?>

                <li><span><a title="<?=$name?>" target="_blank" href="/trends/joinus/<?=$id?>">
                    <?=$name?></a></span> [<?=date('Y-m-d', strtotime($firedate))?>]</li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>
    <div class="join_chunk">
        <div class="join_caption">
            <img width="199" height="50" title="即将开业" alt="即将开业" src="/resources/images/index/join_74.jpg">
            <span><a title="更多加盟店信息" target="_blank" href="/welcome/servicecenter">更多加盟店信息 »</a></span>
        </div>
        <div class="join_pictrue">

        </div>
    </div>

</div>

<div class="join_head">
    <img width="199" height="50" title="现有店铺" alt="现有店铺"
         style="margin-top: -1px" src="/resources/images/index/join_75.jpg">

</div>
<div id="Allshop" class="join_pic">

    <?php foreach($beans as $shop):
      extract($shop);

    ?>
    <div class="join_ture">
           <span class="join_photo">
               <a title="<?=$name?>" target="_blank" href="/welcome/servicecenter/<?=$id?>/s">
                    <img width="156" height="106" alt="<?=$name?>" src="<?=$minipic?>">
               </a>
           </span>
        <strong><a title="<?=$name?>" target="_blank" href="/welcome/servicecenter/<?=$id?>/s">
            <?=$name?></a></strong> <span class="join_diction">
                                                开业时间：2005年01月08日</span>
    </div>

   <?php endforeach;?>

</div>
</div>