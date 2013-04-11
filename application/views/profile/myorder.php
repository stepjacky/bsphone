<div class="user_bor">
    <div class="userdiv">

        <div class="top5"><span class="top5_l"></span><span class="top5_r"></span></div>
        <div class="bor5">
            <div class="user_div">
                <div class="user_content">
                    <table class="reserve_bable">
                     <thead>
                       <tr>
                         <th>
                                    详情
                         </th>

                          <th>
                                      支付宝交易号
                          </th>

                          <th>
                                    标题
                         </th>

                           <th>
                                    商品费+运费=总额
                           </th>

                           <th>
                               <dl>
                                   <dd>[EXPRESS=快递]</dd>
                                   <dd>[EMS=EMS]</dd>
                                   <dd>[POST=平邮]</dd>

                               </dl>


                           </th>

                           <th>
                               状态
                           </th>
                           <th>
                               日期
                           </th>

                       </tr>

                     </thead>
                        <tbody>
                           <?php foreach($data['beans'] as $bean):
                                extract($bean);
                               ?>
                            <tr>
                               <td>
                                 <button onclick="showDetails('<?=$id?>')">
                                           查看
                                 </button>

                               </td>
                               <td>
                                   <?=$alipayno?>
                               </td>
                               <td>
                                   <?=$name?>
                               </td>
                               <td>
                                   <?=$pdtamount?>+<?=$deyfee?>=<?=$pdtamount+$deyfee?>
                               </td>
                               <td>
                                   <?=$deymodel?>

                               </td>
                               <td>
                                   <?=$pstatus?>

                               </td>
                               <td>
                                   <?=$firedate?>

                               </td>


                            </tr>

                           <?php endforeach;?>
                        </tbody>

                        <tfoot>
                            <tr>
                              <td colspan="7">
                                  <?=$data['pagelink']?>

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
