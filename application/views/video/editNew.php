
<link href="/resources/styles/video/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="videoform" method="post" >

<fieldset>
<legend>编辑/新增-视频</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-large" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>地址</td>
   <td>            
        <textarea id="address" name="address" class=" input-xxlarge"><?php echo isset($address)?$address:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>标签</td>
   <td>            
        <textarea id="tags" name="tags" class=" input-xxlarge"><?php echo isset($tags)?$tags:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>小图</td>
   <td>            
        <input id="minipic" type="file" name="minipic" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>观看数</td>
   <td>            
        <input name="views" id="views" type="text" value="<?php echo isset($views)?$views:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>备注</td>
   <td>            
        <textarea id="remark" name="remark" class=" input-xxlarge"><?php echo isset($remark)?$remark:''?></textarea>
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
<script type="text/javascript" src="/resources/scripts/video/edit.js"></script>