
<link href="/resources/styles/coagent/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="coagentform" method="post" >

<fieldset>
<legend>编辑/新增-合作社区</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?=val($id)?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?=val($name)?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>链接</td>
   <td>            
        <textarea id="href" name="href"><?=val($href)?></textarea>
   </td>     
   
<tr>


  
     
  
     <tr>
   <td>主页显示</td>
   <td>            
        <input type="checkbox" id="home" name="home" value="1"

            <?=$home=="1"?"checked='checked":''?>

                />
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
<script type="text/javascript" src="/resources/scripts/coagent/edit.js"></script>