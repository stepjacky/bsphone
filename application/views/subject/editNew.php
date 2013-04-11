
<link href="/resources/styles/subject/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="subjectform" method="post" >

<fieldset>
<legend>编辑/新增-主题活动</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xxlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>发起日期</td>
   <td>            
        <input name="firedate" id="firedate" type="text" value="<?php echo isset($firedate)?$firedate:''?>" class=" datepicker" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>摘要</td>
   <td>            
        <?php echo $my_editor;?>
   </td>     
   
<tr>
  
  
     
  
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
<script type="text/javascript" src="/resources/scripts/subject/edit.js"></script>