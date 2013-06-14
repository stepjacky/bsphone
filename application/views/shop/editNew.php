
<link href="/resources/styles/shop/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="shopform" method="post" >

<fieldset>
<legend>编辑/新增-店铺</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>名字</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" class=" input-xlarge" />
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>地址</td>
   <td>            
        <textarea id="address" name="address" class=" input-xlarge"><?php echo isset($address)?$address:''?></textarea>
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>营业时间</td>
   <td>            
        <input name="openninghours" id="openninghours" type="text" value="<?php echo isset($openninghours)?$openninghours:''?>" class=" input-xxlarge" />
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>分期付款</td>
   <td>            
        <textarea id="Installment" name="Installment" class=" input-xlarge"><?php echo isset($Installment)?$Installment:''?></textarea>
   </td>     
   
</tr>

 <tr>
   <td>电话</td>
   <td>
        <input id="phone" name="phone" class=" input-xlarge" type="text" value="<?php echo isset($phone)?$phone:''?>" />

   </td>

</tr>
  
  
     
  
     <tr>
   <td>公交路线</td>
   <td>            
        <textarea id="busstations" name="busstations" class=" input-xlarge"><?php echo isset($busstations)?$busstations:''?></textarea>
   </td>     
   
</tr>
  

  
<tr>
   <td>地区编号</td>
   <td>            
        <?= form_dropdown2("shoparea_id",isset($shopareas)?$shopareas:array(),isset($shoparea_id)?$shoparea_id:"")?>
   </td>     
   
</tr>
  
  
     
  
     <tr>
   <td>介绍</td>
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
<script type="text/javascript" src="/resources/scripts/shop/edit.js"></script>