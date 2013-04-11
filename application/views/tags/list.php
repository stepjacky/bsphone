<link href="/resources/styles/tags/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="3">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增
            </button>
          </th>
        </tr>
        <tr>
                <th>名称</th> 
                         
                <th>分类</th> 
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr>
                <td>
              <?=$bean['name']?>               
            </td>  
                      
                <td>
              <?=$bean['catalog']?>               
            </td>  
                      
           <td>
             <button class="btn btn-success" type="button" onclick="editOne('<?=urlencode($bean['name'])?>');">
               <i class="icon-edit"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?=urlencode($bean['name'])?>','<?=val($bean['catalog'])?>');">
               <i class="icon-remove"></i>
             </button>
           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="3">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/tags/list.js"></script>