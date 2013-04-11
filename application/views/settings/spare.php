<div class="btn-group">

    <div class="btn-group">
        <button class="btn btn-info" onclick="loadad4();">
            <i class=" icon-refresh icon-2x"></i>
            顶部广告4
        </button>
        <button class="btn btn-success" onclick="openSpareSelector(0)">
            <i class=" icon-thumbs-up icon-2x"></i>
        </button>
    </div>

    <div class="btn-group">
        <button class="btn btn-info" onclick="loadnew8()">
            <i class=" icon-refresh icon-2x"></i>
            新品推荐10
        </button>
        <button class="btn btn-success" onclick="openSpareSelector(1)">
            <i class=" icon-thumbs-up icon-2x"></i>
        </button>
    </div>

    <div class="btn-group">
        <button class="btn btn-info" onclick="loadad2()">
            <i class=" icon-refresh icon-2x"></i>
            广告2-上下
        </button>
        <button class="btn btn-success" onclick="openSpareSelector(2)">
            <i class=" icon-hand-up icon-2x"></i>
        </button>
        <button class="btn btn-success" onclick="openSpareSelector(3)">
            <i class=" icon-hand-down icon-2x"></i>
        </button>
    </div>

</div>

<div id="phonelist">
</div>
<script type="text/javascript">
    var phones;
    var extra='&';
    function openSpareSelector(tp){
        var url='/spare/selector';
        phones = window.showModalDialog(url);

        var fireurl;

        switch(tp){
            case 0 :
                fireurl = '/spare/save_ad4';
                break;
            case 1:
                fireurl = '/spare/save_new8';
                break;
            case 2:
                fireurl = '/spare/save_ad2';
                extra="&ad_type=t";

                break;
            case 3:
                fireurl = '/spare/save_ad2';
                extra="&ad_type=b";
                break;
            default:;

        }
        $.post(fireurl,'spares='+phones+extra);
    }

    function loadad4(){
        $("#phonelist").load('/spare/load_ad4');
    }
    function loadnew8(){
        $("#phonelist").load('/spare/load_new8');
    }

    function loadad2(){
        $("#phonelist").load('/spare/load_sparead2');
    }


</script>