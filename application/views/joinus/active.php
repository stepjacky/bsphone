<div class="join_tier">
    <div class="join_headline">
        <img width="199" height="50" alt="加盟动态" src="/resources/images/index/join_87.jpg">
        <div class="join_xian">
            &nbsp;</div>
    </div>
    <div class="join_intro">
        <div class="join_theleft">

                <ul>

                    <?php foreach($trends as $trd):

                    extract($trd);

                    ?>

                    <li><span><a title="<?=$name?>" target="_blank" href="/trends/joinus/<?=$id?>">
                        <?=$name?></a></span></li>
                    <?php endforeach;?>

                </ul>




        </div>
        <div class="join_theright">
            <div class="join_subject">
                <strong>
                   <?=$bean['name']?></strong> <span>发布日期：<?= date('Y年m月d日 H:i:s',strtotime($bean['firedate']) )?></span>            </div>
            <div class="join_detail">
                <?php
                    $trans = get_html_translation_table(HTML_ENTITIES);
                    $trans = array_flip($trans);
                    echo strtr($bean['content'],$trans);
                ?>

               </div>
        </div>
    </div>
</div>