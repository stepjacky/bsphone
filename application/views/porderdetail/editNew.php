
<link href="/resources/styles/porderdetail/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="porderdetailform" method="post" >

<fieldset>
<legend>编辑/新增-订单明细</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />
  
  
     
  
     <tr>
   <td>商品编号</td>
   <td>            
        <input id="pdtid" type="hidden" name="pdtid" value="<?php echo isset($pdtid)?$pdtid:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>商品名称</td>
   <td>            
        <input id="pdtname" type="hidden" name="pdtname" value="<?php echo isset($pdtname)?$pdtname:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>商品价格</td>
   <td>            
        <input id="pdtprice" type="hidden" name="pdtprice" value="<?php echo isset($pdtprice)?$pdtprice:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>商品备注</td>
   <td>            
        <input id="pdtremark" type="hidden" name="pdtremark" value="<?php echo isset($pdtremark)?$pdtremark:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>商品总数</td>
   <td>            
        <input id="pdtcount" type="hidden" name="pdtcount" value="<?php echo isset($pdtcount)?$pdtcount:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>订单编号</td>
   <td>            
        <input id="porder_id" type="hidden" name="porder_id" value="<?php echo isset($porder_id)?$porder_id:''?>" />
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
<script type="text/javascript" src="/resources/scripts/porderdetail/edit.js"></script>