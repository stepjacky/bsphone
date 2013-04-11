
<link href="/resources/styles/spare/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="spareform" method="post" >

<fieldset>
<legend>编辑/新增-部件</legend>
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
   <td>新浪关注</td>
   <td>            
        <input name="sinafocus" id="sinafocus" type="text" value="<?php echo isset($sinafocus)?$sinafocus:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>类型编号</td>
   <td>            
       <input name="sparetype_id" type="hidden" id="sparetype" value="<?=isset($sparetype_id)?$sparetype_id:''?>"  />
       <div class="input-append">
          <input type="text" id="stype"  readonly="readonly"  />
          <button class="btn btn-success" type="button" onclick="showZtree('stype')">选择类型</button>
       </div>

   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>备注</td>
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
<div id="menuContent" class="menuContent" style="display:none; position: absolute; background-color: #ffffbe">
    <ul id="stypeTree" class="ztree" style="margin-top:0; width:160px;"></ul>
</div>
<link rel="stylesheet" href="/resources/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css" />
<script type="text/javascript" src="/resources/zTree/js/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="/resources/bootstrap/js/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript">

    var treeSource  = <?=val($treeSource)?>;

</script>
<script type="text/javascript" src="/resources/scripts/spare/edit.js"></script>