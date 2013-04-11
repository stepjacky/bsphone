
<link href="/resources/styles/preorder/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="preorderform" method="post" >

<fieldset>
<legend>编辑/新增-预约购机</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?=val($id)?>" />
  
  
     
  
     <tr>
   <td>手机编号</td>
   <td>            
        <input name="phone" id="phone" type="text" value="<?=val($phone)?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>取机店面地区</td>
   <td>            
        <input name="address" id="address" type="text" value="<?=val($address)?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>取机日期</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?=val($firedate)?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>用户姓名</td>
   <td>            
        <input id="username" type="hidden" name="username" value="<?=val($username)?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>电话</td>
   <td>            
        <input name="mobile" id="mobile" type="text" value="<?=val($mobile)?>" />
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
<script type="text/javascript" src="/resources/scripts/preorder/edit.js"></script>