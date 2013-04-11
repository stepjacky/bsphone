<link href="/resources/styles/comment/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>评论列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>

                         
                <th>评论人</th> 
                         
                <th>日期</th>
                         
                <th>精彩</th> 
                         
                <th>手机编号</th> 
                         
                <th>文章编号</th> 
                         
                <th>视频编号</th> 
                         
                <th>动态编号</th> 
                         
                <th>分享编号</th>

                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr>

                <td>
              <?=$bean['guest']?>               
            </td>  
                      
                <td>
              <?=$bean['firedate']?>               
            </td>  
                      

                      
                <td>
              <?=form_is_select($bean['Wonderable'])?>
            </td>  
                      
                <td>

                    <?=form_tip_label($bean['phone_id'],'所属手机')?>
            </td>  
                      
                <td>


                    <?=form_tip_label($bean['artitle_id'],'所属文章')?>
            </td>  
                      
                <td>


                    <?=form_tip_label($bean['video_id'],'所属视频')?>
                </td>
                      
                <td>

                    <?=form_tip_label($bean['trends_id'],'所属动态')?>

            </td>  
                      
                <td>
                    <?=form_tip_label($bean['sharedinfo_id'],'所属分享')?>

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
<script type="text/javascript" src="/resources/scripts/comment/list.js"></script>