<link href="/resources/styles/spare/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>部件列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th colspan="6">
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增部件
            </button>
          </th>
        </tr>
        <tr>

                         
                <th>名称</th> 
                         
                <th>新浪关注</th> 
                         
                <th>类型编号</th> 
                         
               <th>广告图</th>


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
              <?=$bean['sinafocus']?>               
            </td>  
                      
                <td>
              <?=$bean['sparetype_id']?>               
            </td>  


             <td>

                 <button class="btn btn-info " onclick="setPicture('spare','adpic','<?=val($bean['id'])?>')">

                     <i class="icon-glass"></i>

                 </button>

             </td>

             <td>
                <button class="btn btn-primary " onclick="setPicture('spare','minipic','<?=val($bean['id'])?>')">

                    <i class="icon-cloud-download"></i>

                </button>


            </td>
              <td>
                  <button class="btn btn-success " onclick="setPicture('spare','largepic','<?=val($bean['id'])?>')">

                      <i class="icon-cloud-upload"></i>

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
            <td colspan="6">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/spare/list.js"></script>