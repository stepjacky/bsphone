<div class="layoutdiv">
<h2 class="parts_h2">
    <strong class="parts_title1"><?=val($spr['name'])?></strong>
</h2>
<div class="bor3">
<div class="parts_list">
<ul>
  <?php foreach($beans as $spare):?>
  <?php
     extract($spare);
  ?>
    <li>
      <p><a href="/spare/one/<?=val($id)?>" target="_blank">
          <img src="<?=val($minipic)?>"
               alt="<?=val($name)?>"></a></p>
      <p class="name"><a href="/spare/one/<?=val($id)?>" target="_blank"><?=val($name)?></a></p>
    </li>
  <?php endforeach;?>
</ul>
</div>
</div>
<div class="bot3"><span class="bot3_l"></span><span class="bot3_r"></span></div>
</div>