
<link href="/resources/styles/porder/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="porderform" method="post" >

<fieldset>
<legend>编辑/新增-商品订单</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>收件人</td>
   <td>            
        <input name="consignee" id="consignee" type="text" value="<?php echo isset($consignee)?$consignee:''?>" />
   </td>     
   </tr>
<tr>
  
  
     
  
     <tr>
   <td>收件人电话</td>
   <td>            
        <input name="phone" id="phone" type="text" value="<?php echo isset($phone)?$phone:''?>" />
   </td>
      </tr>
<tr>
  
  
     
  
     <tr>
   <td>总额</td>
   <td>            
        <input name="amount" id="amount" type="text" value="<?=$pdtamount+$deyfee?>" />
   </td>
      </tr>

     <tr>
   <td>配送费用</td>
   <td>            
        <input name="deyfee" id="deyfee" type="text" value="<?php echo isset($deyfee)?$deyfee:''?>" />
   </td>
     </tr>
<tr>

     <tr>
   <td>商品总额</td>
   <td>            
        <input name="pdtamount" id="pdtamount" type="text" value="<?php echo isset($pdtamount)?$pdtamount:''?>" />
   </td>
      </tr>
<tr>
  

  
     <tr>
   <td>订货时间</td>
   <td>            
        <input name="firedate" id="firedate" type="text" value="<?php echo isset($firedate)?$firedate:''?>" class=" datepicker" />
   </td>
      </tr>
<tr>

     <tr>
   <td>收货人E-MAIL</td>
   <td>            
        <input name="email" id="email" type="text" value="<?php echo isset($email)?$email:''?>" />
   </td>
      </tr>
<tr>

  
     <tr>
   <td>邮政编码</td>
   <td>            
        <input name="postcode" id="postcode" type="text" value="<?php echo isset($postcode)?$postcode:''?>" />
   </td>
      </tr>

  
     <tr>
   <td>送货方式</td>
   <td>            
        <input name="deymodel" id="deymodel" type="text" value="<?php echo isset($deymodel)?$deymodel:''?>" />
   </td>
     </tr>

   <tr>
   <td>订单用户</td>
   <td>            
        <input name="myuser_username" id="myuser_username" type="text" value="<?php echo isset($myuser_username)?$myuser_username:''?>" />
   </td>
   </tr>

    <tr>
   <td>备注</td>
   <td>            
        <textarea id="remark" name="remark" class=" input-xlarge"><?php echo isset($remark)?$remark:''?></textarea>
   </td>
    </tr>
     
  
</tbody>
<tfoot>
  <tr>
   <td>
           
   </td>
   <td>
  <!-- <button class="btn btn-success" id="saveBtn" type="button">保存</button>
      <button class="btn" type="reset">重置</button> -->
   </td>
  </tr>
</tfoot>     
</table>
</fieldset>
</form>
<script type="text/javascript" src="/resources/bootstrap/js/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript" src="/resources/scripts/porder/edit.js"></script>