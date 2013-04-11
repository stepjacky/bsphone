<link href="/resources/styles/message/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>短消息列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="8">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增短消息
            </button>
          </th>
        </tr>
        <tr>
                <th></th> 
                         
                <th>来自</th> 
                         
                <th>目标</th> 
                         
                <th>发送时间</th> 
                         
                <th>标题</th> 
                         
                <th>内容</th> 
                         
                <th></th> 
                         
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
              <?=$bean['from']?>               
            </td>  
                      
                <td>
              <?=$bean['target']?>               
            </td>  
                      
                <td>
              <?=$bean['firedate']?>               
            </td>  
                      
                <td>
              <?=$bean['name']?>               
            </td>  
                      
                <td>
              <?=$bean['content']?>               
            </td>  
                      
                <td>
              <?=$bean['messagecol']?>               
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
<script type="text/javascript" src="/resources/scripts/message/list.js"></script>