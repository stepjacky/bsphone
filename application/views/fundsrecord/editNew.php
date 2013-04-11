
<link href="/resources/styles/fundsrecord/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="fundsrecordform" method="post" >

<fieldset>
<legend>编辑/新增-基金兑换记录</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input name="id" id="id" type="hidden" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>兑换时间</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?php echo isset($firedate)?$firedate:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>兑换用户</td>
   <td>            
        <input name="username" id="username" type="text" value="<?php echo isset($username)?$username:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>兑换数目</td>
   <td>            
        <input name="amount" id="amount" type="text" value="<?php echo isset($amount)?$amount:''?>" />
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
<script type="text/javascript" src="/resources/scripts/fundsrecord/edit.js"></script>