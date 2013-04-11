<?php
   extract($bean);
?>
<table class="table  table-bordered table-hover">
    <thead>
    <tr>
        <th>选择</th>
        <th>名称</th>

    </tr>

    </thead>
    <tbody>
     <?php foreach($list as $lst): ?>
       <tr>
          <td>
            <input type="checkbox" value="<?=val($lst['id'])?>" class="check_phone" onclick="checkphone(this.value,'<?=val($lst['name'])?>',this)" />
          </td>
          <td>
             <?=val($lst['name'])?>
          </td>

       </tr>

     <?php endforeach;?>
    </tbody>
    <tfoot>
      <tr>
         <td colspan="3">
           <?=val($pagelink)?>
         </td>

      </tr>

    </tfoot>
</table>

<script type="text/javascript">
    $(function(){
        $("div.pagination ul li a").bind('click',function(){
            var link  = $(this).attr('link');
            $("#phones").load(link);
        })
    })
</script>
