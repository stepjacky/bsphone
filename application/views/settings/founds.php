<div class="btn-group">
    <button  class="btn btn-success" onclick="loadtrends();">
        <i class="icon-refresh icon-2x"></i>
        主题展示[广告]
    </button>
    <button class="btn btn-info" onclick="openTrendsDialog();">
        <i class="icon-search icon-2x"></i>

    </button>

</div>
<div class="tab" id="tab">


</div>

<script type="text/javascript">
     function loadtrends(){
         $("#tab").load('/trends/load_vip_trends');
     }

    function openTrendsDialog(){
        var trends = window.showModalDialog('/trends/selector');
        $.post('/trends/save4vip','trends='+trends);

    }

</script>
