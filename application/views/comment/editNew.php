
<link href="/resources/styles/comment/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="commentform" method="post" >

<fieldset>
<legend>编辑/新增-评论</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
   <tr>
   <td>评论人</td>
   <td>            
        <input name="guest" id="guest" type="text" value="<?php echo isset($guest)?$guest:''?>" />
   </td>
   
<tr>
       <tr>
   <td>日期</td>
   <td>            
        <input name="firedate" id="firedate" type="text" value="<?php echo isset($firedate)?$firedate:''?>" class=" datepicker" />
   </td>     
   
<tr>

  
     <tr>
   <td>精彩</td>
   <td>            
        <input type="checkbox" id="Wonderable" name="Wonderable" value="1" <?php echo isset($Wonderable)?'checked':''?> />
   </td>     
   
<tr>
     <tr>
   <td>内容</td>
   <td>            
        <textarea id="content" name="content" class=" input-xxlarge"><?php echo isset($content)?$content:''?></textarea>
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
<script type="text/javascript" src="/resources/scripts/comment/edit.js"></script>