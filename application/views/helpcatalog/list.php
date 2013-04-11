<link href="/resources/styles/helpcatalog/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>帮助分类列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="4">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增帮助分类
            </button>
          </th>
        </tr>
        <tr>

                         
                <th>名称</th>

                         
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
              <?=val($name)?>             
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
            <td colspan="4">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/helpcatalog/list.js"></script>