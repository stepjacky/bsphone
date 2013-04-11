
<link href="/resources/styles/shoparea/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="shopareaform" method="post" >

<fieldset>
<legend>编辑/新增-店面地区</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>说明</td>
   <td>            
        <textarea id="remark" name="remark" class=" input-xlarge"><?php echo isset($remark)?$remark:''?></textarea>
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
<script type="text/javascript" src="/resources/scripts/shoparea/edit.js"></script>