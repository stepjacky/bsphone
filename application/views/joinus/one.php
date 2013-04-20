<form id="jform" action="/joinus/saveUpdate" method="post" target="dataFrame">

    <input type="hidden"   name="id"  value="<?=$id?>"/>



<?=$editor?>



</form>
<button class="btn btn-success" onclick="saveMe()">保存</button>
<script type="text/javascript">
    function saveMe(){
        $("#jform").get(0).submit();
        //window.close();
    }
</script>