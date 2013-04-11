
<link href="/resources/styles/message/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="messageform" method="post" >

<fieldset>
<legend>编辑/新增-短消息</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>来自</td>
   <td>            
        <input name="from" id="from" type="text" value="<?php echo isset($from)?$from:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>目标</td>
   <td>            
        <input name="target" id="target" type="text" value="<?php echo isset($target)?$target:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>发送时间</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?php echo isset($firedate)?$firedate:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>标题</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>内容</td>
   <td>            
        <textarea id="content" name="content" class=" input-xxlarge"><?php echo isset($content)?$content:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td></td>
   <td>            
        <input id="messagecol" type="hidden" name="messagecol" value="<?php echo isset($messagecol)?$messagecol:''?>" />
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
<script type="text/javascript" src="/resources/scripts/message/edit.js"></script>