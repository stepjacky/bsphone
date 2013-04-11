
<link href="/resources/styles/deviceprice/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="devicepriceform" method="post" >

<fieldset>
<legend>编辑/新增-物品价格</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>价格[RMB]</td>
   <td>            
        <input name="value" id="value" type="text" value="<?php echo isset($value)?$value:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>日期</td>
   <td>            
        <input name="firedate" id="firedate" type="text" value="<?php echo isset($firedate)?$firedate:''?>" class=" datepicker" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>所属手机</td>
   <td>            
        <?= form_dropdown("phone_id",isset($shops)?$shops:array(),isset($phone_id)?$phone_id:"")?>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>所属备件</td>
   <td>            
        <?= form_dropdown("spare_id",isset($spares)?$spares:array(),isset($spare_id)?$spare_id:"")?>
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
<script type="text/javascript" src="/resources/scripts/deviceprice/edit.js"></script>