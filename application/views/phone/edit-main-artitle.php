<form id="aform">
    <div class="control-group">
        <label class="control-label">名称</label>
        <div class="controls">
            <input name="name" type="text" class="input-xxlarge" value="<?=val($mname)?>"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">摘要</label>
        <div class="controls">
            <textarea name="summary" class="input-xxlarge"><?=val($msummary)?></textarea>
        </div>
    </div>
</form>

内容
<?php echo $my_editor;?>

<button class="btn btn-info" type="button" onclick="save_artitle();">保存评测</button>

<script type="text/javascript">

    function save_artitle(){

        var data = CKEDITOR.instances.content.getData();
        var params = "content="+data+"&"+$("#aform").serialize();
        var url="/phone/save_main_artitle/<?=$phone?>/<?=$main_artitle?>";
        $.post(url,params,function(){
           alert("保存完毕!");
        });

    }

</script>
