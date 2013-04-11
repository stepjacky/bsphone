<link href="/resources/styles/porderdetail/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>订单明细列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="8">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增订单明细
            </button>
          </th>
        </tr>
        <tr>
                <th>编号</th> 
                         
                <th>商品编号</th> 
                         
                <th>商品名称</th> 
                         
                <th>商品价格</th> 
                         
                <th>商品备注</th> 
                         
                <th>商品总数</th> 
                         
                <th>订单编号</th> 
                         
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
              <?=$bean['pdtid']?>               
            </td>  
                      
                <td>
              <?=$bean['pdtname']?>               
            </td>  
                      
                <td>
              <?=$bean['pdtprice']?>               
            </td>  
                      
                <td>
              <?=$bean['pdtremark']?>               
            </td>  
                      
                <td>
              <?=$bean['pdtcount']?>               
            </td>  
                      
                <td>
              <?=$bean['porder_id']?>               
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
            <td colspan="8">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/porderdetail/list.js"></script>