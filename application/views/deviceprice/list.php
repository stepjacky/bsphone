<link href="/resources/styles/deviceprice/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>物品价格列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="6">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增物品价格
            </button>
          </th>
        </tr>
        <tr>
                <th>编号</th> 
                         
                <th>价格[RMB]</th> 
                         
                <th>日期</th> 
                         
                <th>所属手机</th> 
                         
                <th>所属备件</th> 
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr>
                <td>
              <?=$bean['id']?>               
            </td>  
                      
                <td>
              <?=$bean['value']?>               
            </td>  
                      
                <td>
              <?=$bean['firedate']?>               
            </td>  
                      
                <td>
              <?=$bean['phone_id']?>               
            </td>  
                      
                <td>
              <?=$bean['spare_id']?>               
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
            <td colspan="6">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/deviceprice/list.js"></script>