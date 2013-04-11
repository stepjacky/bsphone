
<link href="/resources/styles/shipaddress/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="shipaddressform" method="post" >

<fieldset>
<legend>编辑/新增-送货地址</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>姓名</td>
   <td>            
        <input name="username" id="username" type="text" value="<?php echo isset($username)?$username:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>省份</td>
   <td>            
        <input name="province" id="province" type="text" value="<?php echo isset($province)?$province:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>地址</td>
   <td>            
        <textarea id="address" name="address" class=" input-xlarge"><?php echo isset($address)?$address:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>邮编</td>
   <td>            
        <input name="postcode" id="postcode" type="text" value="<?php echo isset($postcode)?$postcode:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>用户-EMAIL</td>
   <td>            
        <input name="email" id="email" type="text" value="<?php echo isset($email)?$email:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>电话</td>
   <td>            
        <input name="phone" id="phone" type="text" value="<?php echo isset($phone)?$phone:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>默认地址</td>
   <td>            
        <input type="checkbox" id="usedit" name="usedit" value="<?php echo isset($usedit)?$usedit:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>用户名</td>
   <td>            
        <input name="myuser_username" id="myuser_username" type="text" value="<?php echo isset($myuser_username)?$myuser_username:''?>" />
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
<script type="text/javascript" src="/resources/scripts/shipaddress/edit.js"></script>