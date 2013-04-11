<div class="user_bor">
    <div class="userdiv">

        <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
        <div class="bor5">
            <div class="user_div">
                <div class="user_content">
                    <table  class="reserve_bable">
                        <thead>
                        <tr>
                            <th>
                                商品
                            </th>

                            <th>
                                店面
                            </th>
                            <th>
                                数量
                            </th>
                            <th>
                                日期
                            </th>
                            <th>
                                状态
                            </th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php foreach($data['beans'] as $pord):?>

                        <?php
                            extract($pord);
                            ?>
                        <tr>
                            <td>
                                <a href="/phone/one/<?=$phone?>" target="_blank">
                                <?=val($phone_name)?>
                                </a>
                            </td>
                            <td><?=val($address)?></td>
                            <td><?=val($amount)?></td>
                            <td><?=val($firedate)?></td>
                            <td><?=val3($finished,1,'完成','未完成')?></td>



                        </tr>

                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                         <tr>

                           <td colspan="5">
                               <?=val($data['pagelink'])?>

                           </td>

                         </tr>

                        </tfoot>
                    </table>
                   </div>
            </div>
        </div>
        <div class="bot4"><span class="bot4_l"></span><span class="bot4_r"></span></div>
    </div>
</div>
<link href="/resources/styles/preorder/style.css" rel="stylesheet" type="text/css"  />
<form target="_self" id="pageForm"></form>
<script type="text/javascript">
    $(function(){
        $(".pagination ul li a").bind('click',function(){
            $("#pageForm").attr('action',$(this).attr('link'));
            $("#pageForm").submit();
        });
    })
</script>
