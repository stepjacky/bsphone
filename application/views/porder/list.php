<link href="/resources/styles/porder/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>商品订单列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>

        <tr>

                <th>详情</th>

                <th>状态</th>

                <th>收件人</th>
                         
                <th>收件人电话</th>
                         
                <th>订货时间</th> 
                         
                <th>收货人E-MAIL</th> 
                         
                <th>邮政编码</th>

                <th>送货方式</th>

            <th>商品+运费=商品总额</th>

            <th>备注</th>
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr>
               <td>
                 <button class="btn btn-info"
                     onclick="orderDetail('<?=$bean['id']?>')"
                     >详情</button>

               </td>
               <td>
                   <label class="label label-success">

                       <?=$bean['pstatus']?>
                   </label>


               </td>

                      
                <td>
              <?=$bean['consignee']?>               
            </td>  
                      
                <td>
              <?=$bean['phone']?>               
            </td>  

                <td>
              <?=$bean['firedate']?>               
            </td>  
                      
                <td>
              <?=$bean['email']?>               
            </td>  
                      
                <td>
              <?=$bean['postcode']?>               
            </td>  

                      
                <td>
              <?=$bean['deymodel']?>               
            </td>
               <td>
                   <label class="label label-info">
                       <?=$bean['pdtamount']?>
                   </label>
                   +
                   <label class="label label-danger">
                       <?=$bean['deyfee']?>
                   </label>
                   =<?=$bean['pdtamount']+$bean['deyfee']?>
               </td>

               <td>
              <?=$bean['remark']?>
            </td>  
                      
           <td>

               <div class="btn-group">

             <button class="btn btn-success" type="button" onclick="editOne('<?php echo $bean['id'];?>');">
               <i class="icon-edit"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove"></i>
             </button>
               </div>
           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="16">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">订单详情</h3>
    </div>
    <div id="modal-body" class="modal-body">

    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>


<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/porder/list.js"></script>