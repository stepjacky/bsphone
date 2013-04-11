
<link href="/resources/styles/servicecenter/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="servicecenterform" method="post" >

<fieldset>
<legend>编辑/新增-客服中心</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?=val($id)?>" />
  
  
     
  
     <tr>
   <td>名字</td>
   <td>            
        <input name="name" id="name" type="text" value="<?=val($name)?>" class=" input-xlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>地址</td>
   <td>            
        <textarea id="address" name="address" class=" input-xlarge"><?=val($address)?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>营业时间</td>
   <td>            
        <input name="openninghours" id="openninghours" type="text" value="<?=val($openninghours)?>" class=" input-xxlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>分期付款</td>
   <td>            
        <textarea id="Installment" name="Installment" class=" input-xlarge"><?=val($Installment)?></textarea>
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>公交路线</td>
   <td>            
        <textarea id="busstations" name="busstations" class=" input-xlarge"><?=val($busstations)?></textarea>
   </td>     
   
<tr>
  
       <tr>
   <td>介绍</td>
   <td>            
        <?php echo $my_editor;?>
   </td>     
   
<tr>
  

     <tr>
   <td>电话</td>
   <td>            
        <input name="phone" id="phone" type="text" value="<?=val($phone)?>" />
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
<script type="text/javascript" src="/resources/scripts/servicecenter/edit.js"></script>