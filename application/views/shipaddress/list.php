<link href="/resources/styles/shipaddress/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>送货地址列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
                         
                <th>姓名</th>
                         
                <th>地址</th> 
                         
                <th>邮编</th> 
                         
                <th>EMAIL</th>
                         
                <th>电话</th>
                         
                <th>所有者</th>
                         
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
              <?=$bean['address']?>               
            </td>  
                      
                <td>
              <?=$bean['postcode']?>               
            </td>  
                      
                <td>
              <?=$bean['email']?>               
            </td>  
                      
                <td>
              <?=$bean['phone']?>               
            </td>
                      
                <td>
              <?=$bean['myuser_username']?>               
            </td>  
                      
           <td>
             <button class="btn btn-success" type="button" onclick="editOne('<?php echo $bean['id'];?>');">
               <i class="icon-edit"></i>
             </button>

             <!--

             <button class="btn btn-danger" type="button" onclick="removeOne('<?php echo $bean['id'];?>');">
               <i class="icon-remove"></i>
             </button>

             -->
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
<script type="text/javascript" src="/resources/scripts/shipaddress/list.js"></script>