
<link href="/resources/styles/trends/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="trendsform" method="post" >

<fieldset>
<legend>编辑/新增-动态</legend>
<table class="table table-hover table-bordered">
<tbody>

  
  
     
  
     <tr>
   <td>标题</td>
   <td>
       <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xxlarge" />
   </td>     
   
</tr>

     <tr>
   <td>热度</td>
   <td>
       <input type="text" name="views" value="<?php echo isset($views)?$views:''?>" />

   </td>

</tr>
  
  
     
  
     <tr>
   <td>发起日期</td>
   <td>            
        <input name="firedate" id="firedate" type="text" value="<?php echo isset($firedate)?$firedate:''?>" class=" datepicker" />
   </td>     
   
</tr>


      <tr>
          <td>标签</td>
          <td>
              <textarea name="tags" ><?php echo isset($tags)?$tags:''?></textarea>

          </td>

      </tr>
  <tr>

       <td>摘要</td>
       <td>
           <textarea  name="summary"><?php echo isset($summary)?$summary:''?></textarea>

       </td>
  </tr>
     
  
     <tr>
   <td>内容</td>
   <td>            
        <?php echo $my_editor;?>
   </td>     
   
</tr>
  
  
     
  
</tbody>
<tfoot>
  <tr>
   <td>
           
   </td>
   <td>
   <button class="btn btn-success" id="saveBtn" type="button">保存</button>
      <button class="btn" type="reset">重置</button> 
   </td>
  </tr>
</tfoot>     
</table>
</fieldset>
</form>
<script type="text/javascript" src="/resources/bootstrap/js/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript" src="/resources/scripts/trends/edit.js"></script>