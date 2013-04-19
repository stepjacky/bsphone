
<link href="/resources/styles/sparetype/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="sparetypeform" method="post" >

<fieldset>
<legend>编辑/新增-部件类型</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>名称</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xlarge" />
   </td>     
   
</tr>



  <tr>
          <td>图标</td>
          <td>
              <input name="icon" type="text" readonly="true" onclick="setPicture(this)"/>
              <img width="100" height="100" />


          </td>

      </tr>

    <tr>
          <td>上级</td>
          <td>
             <?=form_dropdown2('parent',$parents,'<?=val($parent)?>')  ?>

          </td>

      </tr>
  <tr>
          <td>顶级分类</td>
          <td>
              <input type="checkbox" id="isRoot" onclick="setRooted(this,'parent')" />
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
<script type="text/javascript" src="/resources/scripts/sparetype/edit.js"></script>