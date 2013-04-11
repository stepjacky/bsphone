<table class="table table-bordered table-hover">
    <tbody>
    <?php foreach($list as $lst):?>
      <tr>
         <td>
            <a href="/trends/one/<?=val($lst['id'])?>" target="_blank">
               浏览动态
            </a>
         </td>
         <td>

             <?=val($lst['name'])?>
         </td>

      </tr>


    <?php endforeach;?>
    </tbody>

</table>