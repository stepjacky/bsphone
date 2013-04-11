
<script type="text/javascript" src="/resources/jquerytdnd/jquery.tablednd.js"></script>
<link href="/resources/styles/brand/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>手机品牌列表</h3>
<table     class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="5">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增手机品牌
            </button>

           </th>
        </tr>
        <tr>
                <th>编号</th> 
                         
                <th>名称</th> 
                         

                         
                <th>备注</th>

            <th>图片</th>

            <th>管理</th>
        </tr>
        </thead>
        <tbody id="list" >

            <?php
              $i=1;
            foreach($datasource as $bean):?>
           <tr id="<?=$i++;?>"  bizPk='<?=$bean['id']?>'>
                <td>
              <?=$bean['id']?>               
            </td>  
                      
                <td>
              <?=$bean['name']?>               
            </td>  
                      

                      
                <td>
              <?=$bean['remark']?>               
            </td>
               <td>
                   <button class="btn btn-primary " onclick="setPicture('brand','picture','<?=val($bean['id'])?>')">

                       <i class="icon-cloud-download"></i>

                   </button>
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
            <td colspan="5">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>

<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/brand/list.js"></script>