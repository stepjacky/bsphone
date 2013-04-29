<link href="/resources/styles/phone/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>手机列表</h3>
<div class="btn-group">
    <?php foreach($brands as $brand):?>
        <button class="btn btn-info" onclick="loadByBrand('<?=$brand['id']?>')">
            <?=$brand['name']?>
        </button>
    <?php endforeach; ?>
</div>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>

        <tr>
          <th colspan="9">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增手机
            </button>
             背景色区分:
            <label class="label label-success">在售</label>
            <label class="label label-info">即将</label>
            <label class="label label-error">下架</label>
          </th>
        </tr>
        <tr>
                         
                <th>名称</th>

                         
                <th>屏幕尺寸</th> 
                         
                <th>屏幕宽</th> 
                         
                <th>屏幕高</th> 
                         
                <th>像素[万]</th> 
                         
                <th>电池容量[毫安]</th>

                <th>品牌</th>


                <th>状态</th>
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr
               class="
               <?=($bean['pstatus']==0?'success':($bean['pstatus']==1?'info':'error'))?>
               "
               >

                      
                <td>
              <?=$bean['name']?>               
            </td>

                      
                <td>
              <?=$bean['screen']?>               
            </td>  
                      
                <td>
              <?=$bean['screenx']?>               
            </td>  
                      
                <td>
              <?=$bean['screeny']?>               
            </td>  
                      
                <td>
              <?=$bean['carame']?>
            </td>  
                      
                <td>
              <?=$bean['cellcap']?>               
            </td>  

                      

                      
                <td>
              <?=$bean['brand']?>
            </td>  
                      

                      
           <td>
               <div class="btn-group">
                   <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">状态<span class="caret"></span></button>
                   <ul class="dropdown-menu">
                       <li><a href="javascript:;" onclick="modifyStatus('<?=$bean['id']?>',0);" >在售</a></li>
                       <li><a href="javascript:;" onclick="modifyStatus('<?=$bean['id']?>',-1);">退市</a></li>
                       <li><a href="javascript:;" onclick="modifyStatus('<?=$bean['id']?>',1);">未上市</a></li>
                   </ul>
               </div>

           </td>
           <td class="btn-group">
             <button class="btn btn-success" type="button" onclick="editOne('<?php echo $bean['id'];?>');">
               <i class="icon-edit"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove"></i>
             </button>
             <button class="btn btn-success" type="button" onclick="editPrice('<?php echo $bean['id'];?>');">
                <i class="icon-magnet"></i>
             </button>
             <button class="btn btn-info" type="button" onclick="mainArtitle('<?php echo $bean['id'];?>')">
                 <i class=" icon-book"></i>

             </button>

           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="9">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/phone/list.js"></script>