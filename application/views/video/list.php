<link href="/resources/styles/video/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>视频列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="8">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增视频
            </button>
          </th>
        </tr>
        <tr>

                         
                <th>名称</th> 
                         
                <th>地址</th> 
                         
                <th>标签</th> 
                         
                <th>发布日期</th>
                         
                <th>观看数</th>

                <th>小图</th>
                         
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
              <?=form_you_ku($bean['address'])?>
            </td>  
                      
                <td>
              <?=$bean['tags']?>               
            </td>  
                      
                <td>
              <?=$bean['firedate']?>
            </td>  
                      
                <td>
              <?=$bean['views']?>
            </td>
<td>
               <button class="btn btn-primary " onclick="setPicture('minipic','<?=val($bean['id'])?>')">

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
            <td colspan="8">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/video/list.js"></script>