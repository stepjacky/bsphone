<link href="/resources/styles/sharedinfo/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>分享列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>

                         
                <th>用户</th> 
                         
                <th>名称</th>
                         
                <th>优点</th> 
                         
                <th>缺点</th> 
                         
                <th>有用</th> 
                         
                <th>没用</th> 
                         
                <th>手机编号</th>

                         
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
              <?=$bean['name']?>
            </td>  
                      
                <td>
              <?=form_tip_label($bean['virtue'],'优点')?>
            </td>  
                      
                <td>
              <?=form_tip_label($bean['defect'],'缺点')?>
            </td>  
                      
                <td>
              <?=$bean['praise']?>               
            </td>  
                      
                <td>
              <?=$bean['dispraise']?>               
            </td>  
                      
                <td>
              <?=form_tip_label($bean['phone_id'],'所属手机')?>
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
            <td colspan="10">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/sharedinfo/list.js"></script>