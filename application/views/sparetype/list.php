
<link href="/resources/styles/sparetype/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>部件类型列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="3" class="btn-group">

            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增部件类型
            </button>
            <button  class="btn"
                     onclick="startSort()"
                     >
             <i class="icon-minus"></i>排序
            </button>


          </th>
        </tr>
        <tr>

                         
                <th>名称</th>
              <th>图标</th>
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php
            $i=1;
            foreach($datasource as $bean):?>
           <tr id="<?=$i++;?>"  bizPk='<?=$bean['id']?>'>

                <td>
              <?=$bean['name']?>               
            </td>
               <td>
                   <img src="<?=$bean['icon']?>"  width="100" height="100"  />
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
            <td colspan="3">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/jquerytdnd/jquery.tablednd.js"></script>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/sparetype/list.js"></script>