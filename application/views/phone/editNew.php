
<link href="/resources/styles/phone/style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="phoneform" method="post" >

<fieldset>
<legend>编辑/新增-手机</legend>
<table class="table table-hover table-bordered">
<tbody>
      <input id="id" type="hidden" name="id" value="<?php echo isset($id)?$id:''?>" />

     <tr>
   <td>名字/型号</td>
   <td>            
        <input name="name" id="name" type="text" value="<?php echo isset($name)?$name:''?>" />
   </td>     
   <tr>
       <td>别名</td>
       <td>
        <input  name="aliasName"  type="text" value="<?= isset($aliasName)?$aliasName:''?>"   />

       </td>

   </tr>
<tr>

      <tr>
          <td>品牌</td>
          <td>
              <?= form_dropdown2("brand",isset($brands)?$brands:array(),isset($brand)?$brand:"")?>
          </td>

      <tr>




      <tr>
          <td>OS</td>
          <td>
              <?= form_dropdown2("os",isset($oses)?$oses:array(),isset($os)?$os:"")?>
          </td>

      <tr>
     
  
     <tr>
   <td>热度</td>
   <td>            
        <input name="moods" id="moods" type="text" value="<?php echo isset($moods)?$moods:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>屏幕尺寸</td>
   <td>            
        <input name="screen" id="screen" type="text" value="<?php echo isset($screen)?$screen:''?>" class=" input-xlarge" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>屏幕宽</td>
   <td>            
        <input name="screenx" id="screenx" type="text" value="<?php echo isset($screenx)?$screenx:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>屏幕高</td>
   <td>            
        <input name="screeny" id="screeny" type="text" value="<?php echo isset($screeny)?$screeny:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>像素[万]</td>
   <td>            
        <input name="carame" id="carame" type="text" value="<?php echo isset($carame)?$carame:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>电池容量[毫安]</td>
   <td>            
        <input name="cellcap" id="cellcap" type="text" value="<?php echo isset($cellcap)?$cellcap:''?>" />
   </td>     
   
<tr>
  
  
     
  
     <tr>
   <td>标配</td>
   <td>            
        <textarea id="feature" name="feature" class=" input-xlarge"><?php echo isset($feature)?$feature:''?></textarea>
   </td>     
   
<tr>
     
  

  
  
     
  
     <tr>
   <td>在售</td>
   <td>            
        <input type="radio" id="outsale_yes" name="outsale"
               <?php
                 echo isset($outsale) && $outsale=="1"?"checked='ehecked'":"";
               ?>
               value="1" />是
        <input type="radio" id="outsale_no" name="outsale"

            <?php
            echo isset($outsale) && $outsale=="0"?"checked='ehecked'":"";
            ?>
               value="0" />否
   </td>
   
<tr>
  
  
     
  
     <tr>
   <td>颜色</td>
   <td>            
        <input name="color" id="color" type="text" value="<?php echo isset($color)?$color:''?>" />
   </td>     
   
<tr>
  
  
     
  

  
  
     
  
     <tr>
   <td>细节</td>
   <td>            
        <?php echo $my_editor;?>
   </td>     
   
<tr>

      <tr>
          <td>备注</td>
          <td>
              <textarea id="remark" name="remark" class=" input-xlarge"><?php echo isset($remark)?$remark:''?></textarea>
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
<script type="text/javascript" src="/resources/scripts/phone/edit.js"></script>