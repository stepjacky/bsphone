<div id="content">
    <div class="layout">
        <table style="width:979px;" class="contrast">
            <tbody><tr>
                <th colspan="4"><img src="/resources/images/index/title7.png"></th>
            </tr>
            <tr>
                <td class="kd1">产品名称</td>
                <?php foreach($beans as $bean):?>
                <?php extract($bean);?>
                <td class="kd2">
                    <a title="<?=$name?>"
                       target="_blank"
                       href="/phone/one/<?=$id?>">
                        <?=$name?>
                    </a>&nbsp;
                </td>

                <?php endforeach;?>
            </tr>
            <tr class="contrast_img">
                <td class="kd1">产品图片</td>
                <?php foreach($beans as $bean):?>
                <?php extract($bean);?>
                <td class="kd2">

                 <a title="<?=$name?>"
                    target="_blank"
                    href="/phone/one/<?=$id?>">
                     <img src="<?=$minipic?>" width="70" height="90" style="vertical-align: middle;margin-top: 35px"></a></td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon1.gif">商品价格</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">

                        <em><?=$status==0?'￥'.$price:''?>&nbsp;</em>
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon2.gif">手机品牌</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$brand?>&nbsp;
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon3.gif">操作系统</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$os?>&nbsp;
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon4.gif">屏幕分辨率</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$square?>&nbsp;
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon5.gif">屏幕尺寸</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$screen?>&nbsp;英寸
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon6.gif">相机像素</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$carame?>&nbsp;万
                    </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <td class="kd1"><img src="/resources/images/index/icon7.gif">电池容量</td>
                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>
                    <td class="kd2">
                        <?=$cellcap?>mAh&nbsp;
                    </td>
                <?php endforeach;?>
            </tr>
            </tbody></table>
        <table style="width:979px;" class="contrast">
            <tbody><tr>
                <th colspan="4"><img src="/resources/images/index/title8.png"></th>
            </tr>
            <tr>
                <td class="kd1"></td>

                <?php foreach($beans as $bean):?>
                    <?php extract($bean);?>

                    <td style="text-align: left; vertical-align: top;" class="kd2">
                         <?=$remark;?>

                    </td>

                <?php endforeach;?>



            </tr>
            </tbody></table>
    </div>
</div>