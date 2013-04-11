<link href="/resources/styles/coagent/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>合作社区列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="6">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增合作社区
            </button>
          </th>
        </tr>
        <tr>

                <th>名称</th> 
                         
                <th>链接</th> 
                         
                <th>小图</th> 
                         
                <th>主页显示</th> 
                         
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
              <?=val($href)?>             
            </td>  
                      
                <td>
                    <button class="btn btn-primary " onclick="setPicture('coagent','minipic','<?=val($bean['id'])?>')">

                        <i class="icon-cloud-download"></i>

                    </button>
            </td>  
                      
                <td>
              <input type='checkbox' class='homed' id='coagent_<?=val($id)?>' onclick="homedIt('<?=val($id)?>')"

                  <?=$home=='1'?"checked='checked'":''?>

                      />
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
            <td colspan="6">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/coagent/list.js"></script>