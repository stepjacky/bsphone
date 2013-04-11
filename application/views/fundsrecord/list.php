<link href="/resources/styles/fundsrecord/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>基金兑换记录列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="5">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增基金兑换记录
            </button>
          </th>
        </tr>
        <tr>

            <th>兑换用户</th>

            <th>兑换时间</th>

            <th>兑换数目</th>
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr>

               <td>
                   <?=$bean['username']?>
               </td>

               <td>
              <?=$bean['firedate']?>               
               </td>
                      
                <td>
              <?=$bean['amount']?>               
            </td>  
                      
           <td>
             <!--
               <button class="btn btn-success" type="button" onclick="editOne('<?php echo $bean['id'];?>');">
               <i class="icon-edit"></i>
             </button>
             -->
             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove"></i>
             </button>
           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="5">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/fundsrecord/list.js"></script>