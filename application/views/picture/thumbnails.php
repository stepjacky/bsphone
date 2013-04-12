
<script type="text/javascript" src="/resources/tongue/jquery.tongue.js"></script>
<?php foreach($beans as $pic):?>
<? extract($pic); ?>
<script type="text/javascript">
    var topType = '<?=$ptype?>';
</script>

<li class="span2">
    <div class="thumbnail">
        <a href="javascript:;" onclick="removePic('<?=$pic['id']?>')">
            <i class="icon-remove-circle"></i>

        </a>

        <div class="tongued">
            <img alt="<?=val($name)?>"  style="width: 180px; height: 100px;" src="<?=$path?>" > <!-- Main element, can be image or anything. -->
            <div class="tongue-content">
                <div class="caption">
                    <p>
                        <label class="radio inline">
                            <input type="radio" id="ptype-mini-<?=$pic['id']?>" name="ptype-<?=$pic['id']?>" value="minipic"
                                <?php
                                if($ptype=="minipic")
                                    echo "checked='checked'";
                                ?>
                                   onclick="updatePtype('<?=$pic['id']?>',this.value)"
                                />小
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="ptype-large-<?=$pic['id']?>" name="ptype-<?=$pic['id']?>" value="largepic"
                                <?php
                                if($ptype=="largepic")
                                    echo "checked='checked'";
                                ?>
                                   onclick="updatePtype('<?=$pic['id']?>',this.value)"

                                >大
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="ptype-plist-<?=$pic['id']?>" name="ptype-<?=$pic['id']?>" value="plist"
                                <?php
                                if($ptype=="plist")
                                    echo "checked='checked'";
                                ?>
                                   onclick="updatePtype('<?=$pic['id']?>',this.value)"
                                >表
                        </label>
                    </p>
                </div>


            </div> <!-- Content to be shown as tongue.  -->
        </div>



    </div>
</li>

<?php endforeach;?>
<li>
    <?=$pagelink?>

</li>



<script type="text/javascript">
   function updatePtype(id,ptype){
       if(topType=="artitle" || topType=="video")return;
       $.post('/picture/update_ptype/'+id+"/"+ptype);
   }

   function removePic(id){

       if(!confirm('确定删除该图？')) return;
       var t = getEventSource();

       $.post('/picture/remove/'+id,function(){
          $(t).parent().parent().parent().parent().parent().remove();
       });
   }
    $(function(){
        $("div.pagination ul li a").bind("click",function(){
            var page = $(this).attr("link").substring(1);
            $("#mythumb").load("/picture/thumbnails/"+topType+"/"+page);
        });

        $('.tongued').tongue();

    })
</script>