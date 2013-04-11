<!--<link href="/resources/styles/preorder/style.css" media="screen" rel="stylesheet" type="text/css" />-->
<h3>预约订单</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="7">
           <!-- <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增预约购机
            </button>-->

            <label class="label label-info">
                    蓝色-订单未完成
            </label>
            <label class="label label-success">
                    绿色-完成
            </label>
          </th>
        </tr>
        <tr>

                <th>手机</th>
                         
                <th>数量</th>
                         
                <th>取机日期</th> 
                         
                <th>用户姓名</th> 
                         
                <th>电话</th>

                <th>取货地址</th>

            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
            <?php
               extract($bean);
            ?>
           <tr class="<?= $finished==0?'info':'success' ?>"  >

                <td>
               <?=val($phone_name)?>
            </td>  
               <td>
               <?=val($amount)?>
               </td>

                <td>
              <?=val($firedate)?>             
            </td>  
                      
                <td>
              <?=val($username)?>             
            </td>  
                      
                <td>
              <?=val($mobile)?>             
            </td>
               <td>
                   <?=val($address)?>

               </td>

               <td>
               <div class="btn-group">
             <button class="btn btn-success" type="button" onclick="toggleStatus('<?=$id?>','<?=!$finished?>');">
               <i class="icon-white icon-2x icon-adjust"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove  icon-2x"></i>
             </button>
               </div>
           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="7">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/preorder/list.js"></script>