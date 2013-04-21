<link href="/resources/styles/myuser/style.css" media="screen" rel="stylesheet" type="text/css" />
<h3>用户列表</h3>
<table id="list" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th >
            <button type="button" class="btn btn-info" onclick="newOne();">
             <i class="icon-plus"></i>新增用户
            </button>
          </th>
          <th colspan="7">
              <label class="label label-success">
                  激活
              </label>
              <label class="label label-warning">
                  待激活
              </label>

          </th>
        </tr>
        <tr>
                <th>用户名</th> 
                         
                <th>姓名</th> 
                         
                <th>昵称</th>
                         
                <th>用户类型</th>

                         
                <th>手机型号</th>

                <th>基金</th>
                         
                <th>VIP编号</th>


                         
            <th>管理</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($datasource as $bean):?>
           <tr class="<?=$bean['acted']?'success':'error'?>"
               >
                <td>
              <?=$bean['id']?>
            </td>  
                      
                <td>
              <?=$bean['name']?>               
            </td>  
                      
                <td>
              <?=$bean['nick']?>               
            </td>  

                      
            <td>
              <?=$bean['utype']==1?'普通':'VIP'?>
            </td>  
                      

                      
                <td>
              <?=$bean['myphone']?>               
            </td>  
                      
                <td>
              <?=$bean['founds']?>               
            </td>  

                <td>
              <?=$bean['vipid']?>               
            </td>

                      
           <td>
             <button class="btn btn-success" type="button" onclick="editOne('<?=urlencode($bean['id'])?>');">
               <i class="icon-edit"></i>
             </button>
             <button class="btn btn-danger" type="button" onclick="removeOne('<?=urlencode($bean['id'])?>');">
               <i class="icon-remove"></i>
             </button>
           </td>
           </tr>
        <?php endforeach; ?>
        
        
        </tbody>
        <tfoot>
        <tr>          
            <td colspan="14">
                <?=$pagelink;?>
            </td>
        </tr>
        </tfoot>
    </table>
<script type="text/javascript" src="/resources/scripts/list.js"></script>
<script type="text/javascript" src="/resources/scripts/myuser/list.js"></script>