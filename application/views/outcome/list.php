<link href="/resources/styles/outcome/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>发货记录列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="7">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增发货记录
            </button>
          </th>
        </tr>
        <tr>

                         
                <th>收货人</th> 
                         
                <th>物流公司</th> 
                         
                <th>收货地址</th> 
                         
                <th>发货单号</th> 
                         
                <th>发货时间</th> 
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
            <?php
               extract($bean);
            ?>
           <tr>
                      
                <td>
              <?=val($username)?>             
            </td>  
                      
                <td>
              <?=val($Logistics)?>             
            </td>  
                      
                <td>
              <?=val($address)?>             
            </td>  
                      
                <td>
              <?=val($shipnumber)?>             
            </td>  
                      
                <td>
              <?=val($firedate)?>             
            </td>  
                      
           <td>
             <button class="btn btn-success" type="button" onclick="editOne('<?php echo $bean['id'];?>');">
               <i class="icon-edit"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove"></i>
             </button>
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
<script type="text/javascript" src="/resources/scripts/outcome/list.js"></script>