<link href="/resources/styles/trends/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>动态列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="5">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增动态
            </button>
          </th>
        </tr>
        <tr>
                <th>编号</th> 
                         
                <th>标题</th> 
                         
                <th>发起日期</th> 
                         
                         
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
              <?=$bean['name']?>               
            </td>  
                      
                <td>
              <?=$bean['firedate']?>               
            </td>  
                      
                      
           <td>

               <button class="btn btn-primary " onclick="setPicture('trends','minipic','<?=val($bean['id'])?>')">

                   <i class="icon-cloud-download"></i>

               </button>
               <button class="btn btn-success " onclick="setPicture('trends','largepic','<?=val($bean['id'])?>')">

                   <i class="icon-cloud-upload"></i>

               </button>

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
            <td colspan="5">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/trends/list.js"></script>