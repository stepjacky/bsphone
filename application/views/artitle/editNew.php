
<link href="/resources/styles/artitle/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="artitleform" method="post" >

<fieldset>
<legend>编辑/新增-新闻</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>标题</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xxlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>来源</td>
   <td>            
        <input name="source" id="source" type="text" value="<?php echo isset($source)?$source:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>作者</td>
   <td>            
        <input name="author" id="author" type="text" value="<?php echo isset($author)?$author:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>摘要</td>
   <td>            
        <textarea id="summary" name="summary" class=" input-xlarge"><?php echo isset($summary)?$summary:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>发布日期</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?php echo isset($firedate)?$firedate:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>浏览量</td>
   <td>            
        <input name="views" id="views" type="text" value="<?php echo isset($views)?$views:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>标签</td>
   <td>            
        <textarea id="tags" name="tags" class=" input-xlarge"><?php echo isset($tags)?$tags:''?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>内容</td>
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
<script type="text/javascript" src="/resources/scripts/artitle/edit.js"></script>