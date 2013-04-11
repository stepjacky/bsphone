
<link href="/resources/styles/sharedinfo/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="sharedinfoform" method="post" >

<fieldset>
<legend>编辑/新增-分享</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>用户</td>
   <td>            
        <input name="username" id="username" type="text" value="<?php echo isset($username)?$username:''?>" />
   </td>     
   
<tr>

      <tr>
          <td>用户</td>
          <td>
              <input name="name" id="name" class=" input-xlarge"  type="text" value="<?php echo isset($name)?$name:''?>" />
          </td>

      <tr>







      <tr>
   <td>优点</td>
   <td>            
        <textarea id="virtue" name="virtue" class=" input-xlarge"><?php echo isset($virtue)?$virtue:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>缺点</td>
   <td>            
        <textarea id="defect" name="defect" class=" input-xlarge"><?php echo isset($defect)?$defect:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>有用</td>
   <td>            
        <input type="text" id="praise" name="praise" value="<?php echo isset($praise)?$praise:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>没用</td>
   <td>            
        <input type="text" id="dispraise" name="dispraise" value="<?php echo isset($dispraise)?$dispraise:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>手机编号</td>
   <td>            
        <?= form_dropdown("phone_id",isset($shops)?$shops:array(),isset($phone_id)?$phone_id:"")?>
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
<script type="text/javascript" src="/resources/scripts/sharedinfo/edit.js"></script>