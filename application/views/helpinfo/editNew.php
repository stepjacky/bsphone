
<link href="/resources/styles/helpinfo/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="helpinfoform" method="post" >

<fieldset>
<legend>编辑/新增-帮助信息</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?=val($id)?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?=val($name)?>" />
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>分类</td>
   <td>            

       <?=form_dropdown2("catalog",$catas,val($catalog))?>
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>日期</td>
   <td>            
        <input type="text" name="firedate" id="firedate" data-date-format="yyyy-mm-dd" readonly="true" class=" datepicker" value="<?=val($firedate)?>" />
   </td>     
   
</tr>
  
  
     
  

  
     
  
     <tr>
   <td>热门</td>
   <td>            
        <input type="checkbox" id="hotable" name="hotable" value="1" />
   </td>     
   
</tr>

      <tr>
          <td>内容</td>
          <td>
              <?php echo $my_editor;?>
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
<script type="text/javascript" src="/resources/scripts/helpinfo/edit.js"></script>