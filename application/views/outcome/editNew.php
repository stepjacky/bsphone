
<link href="/resources/styles/outcome/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="outcomeform" method="post" >

<fieldset>
<legend>编辑/新增-发货记录</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?=val($id)?>" />
  
  
     
  
     <tr>
   <td>收货人</td>
   <td>            
        <input name="username" id="username" type="text" value="<?=val($username)?>" />
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>物流公司</td>
   <td>            
        <textarea id="Logistics" name="Logistics"><?=val($Logistics)?></textarea>
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>收货地址</td>
   <td>            
        <textarea id="address" name="address"><?=val($address)?></textarea>
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>发货单号</td>
   <td>            
        <input name="shipnumber" id="shipnumber" type="text" value="<?=val($shipnumber)?>" />
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>发货时间</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?=val($firedate)?>" />
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
<script type="text/javascript" src="/resources/scripts/outcome/edit.js"></script>