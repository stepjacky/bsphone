<div class="btn-group">

    <div class="btn-group">
        <button class="btn btn-info" onclick="loadNews()">
            <i class=" icon-refresh icon-2x"></i>
            首选视频[4条]
        </button>
        <button class="btn btn-success" onclick="openNewsSelector()">
            <i class=" icon-thumbs-up icon-2x"></i>
        </button>
    </div>

</div>

<div id="phonelist">
</div>

<script type="text/javascript">


    function openNewsSelector(){
        var beans =   window.showModalDialog('/video/selector');

        if(beans!=''){
            $.post('/video/save_recommends',"beans="+beans);

        }
    }

    function loadNews(){
        $("#phonelist").load('/video/recommend_video');
    }

</script>