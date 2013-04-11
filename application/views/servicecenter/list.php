<link href="/resources/styles/servicecenter/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>客服中心列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="12">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增客服中心
            </button>
          </th>
        </tr>
        <tr>
                         
                <th>名字</th> 
                         
                <th>地址</th> 
                         
                <th>营业时间</th> 
                         
                <th>分期付款</th> 
                         
                <th>公交路线</th>
            <th>电话</th>
            <th>地图</th>
                         

                <th>小图</th> 
                         
                <th>大图</th> 
                         
             
                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
            <?php
               extract($bean);
            ?>

                      
                <td>
              <?=val($name)?>             
            </td>  
                      
                <td>
              <?=val($address)?>             
            </td>  
                      
                <td>
              <?=val($openninghours)?>             
            </td>  
                      
                <td>
              <?=val($Installment)?>             
            </td>  
                      
                <td>
              <?=val($busstations)?>             
            </td>  
                      

                  <td>
              <?=val($phone)?>             
            </td>


               <td>

                   <button class="btn btn-primary " onclick="setPictureExtra('servicecenter','id','<?=val($id)?>','mapimg')">

                       <i class=" icon-cloud-upload"></i>

                   </button>
               </td>

               <td>
              <button class="btn btn-primary " onclick="setPictureExtra('servicecenter','id','<?=val($id)?>','minipic')">

                       <i class=" icon-cloud-upload"></i>

                   </button>       
            </td>  
                      

             <td>
                   <button class="btn btn-primary " onclick="setPictureExtra('servicecenter','id','<?=val($id)?>','largepic')">

                       <i class=" icon-cloud-upload"></i>

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
            <td colspan="12">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/servicecenter/list.js"></script>