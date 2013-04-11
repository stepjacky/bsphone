<link href="/resources/styles/shop/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>店铺列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="10">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增店铺
            </button>
          </th>
        </tr>
        <tr>

                <th>名字</th> 
                         
                <th>地址</th> 
                         
                <th>营业时间</th> 
                         
                <th>分期付款</th> 
                         
                <th>公交路线</th> 
                         

                <th>地区编号</th>

                <th>地图</th>
                <th>小图</th>
                <th>大图</th>


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
              <?=$bean['address']?>               
            </td>  
                      
                <td>
              <?=$bean['openninghours']?>               
            </td>  
                      
                <td>
              <?=$bean['Installment']?>               
            </td>  
                      
                <td>
              <?=$bean['busstations']?>               
            </td>  

                      
                <td>
              <?=form_tip_label($bean['shoparea_id'],'所属区域编号编号')?>
            </td>


               <td>
                   <button class="btn btn-success " onclick="setPicture('shop','mapimg','<?=val($bean['id'])?>')">

                       <i class="icon-table"></i>

                   </button>


               </td>

               <td>
                   <button class="btn btn-primary " onclick="setPicture('shop','minipic','<?=val($bean['id'])?>')">

                       <i class=" icon-cloud-upload"></i>

                   </button>


               </td>

               <td>
                   <button class="btn btn-info " onclick="setPicture('shop','largepic','<?=val($bean['id'])?>')">

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
            <td colspan="10">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/shop/list.js"></script>