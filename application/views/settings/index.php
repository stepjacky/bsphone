<div class="btn-group">

   <div class="btn-group">
        <button class="btn btn-info" onclick="loadNewestPhone();">
            <i class=" icon-refresh icon-2x"></i>
        新款热门机型
        </button>
       <button class="btn btn-success" onclick="openPhoneSelector(0)">
           <i class=" icon-thumbs-up icon-2x"></i>
       </button>
   </div>

   <div class="btn-group">
    <button class="btn btn-info" onclick="loadComingPhone()">
        <i class=" icon-refresh icon-2x"></i>
        即将上市机型
    </button>
       <button class="btn btn-success" onclick="openPhoneSelector(1)">
           <i class=" icon-thumbs-up icon-2x"></i>
       </button>
   </div>
    <div class="btn-group">
    <button class="btn btn-info" onclick="load_recommends();">
        <i class=" icon-refresh icon-2x"></i>
        热门配件
    </button>
        <button class="btn btn-success" onclick="openSpareSelector()">
            <i class=" icon-thumbs-up icon-2x"></i>
        </button>
    </div>

    <div class="btn-group">
    <button class="btn btn-info" onclick="loadNews();">
        <i class=" icon-refresh icon-2x"></i>
        主页新闻[幻灯]
    </button>
        <button class="btn btn-success" onclick="openNewsSelector()">
            <i class=" icon-thumbs-up icon-2x"></i>
        </button>
    </div>
</div>

<div id="phonelist">
</div>


<script type="text/javascript">
    function loadNewestPhone(){

        var url='/phone/load_new_recommend';
        $.get(url,function(cnt){
           $("#phonelist").html(cnt);
        })


    }

    function loadComingPhone(){
        var url='/phone/load_coming';
        $.get(url,function(cnt){
            $("#phonelist").html(cnt);
        })
    }

    function load_recommends(){
        var url='/spare/load_recommends';
        $.get(url,function(cnt){
            $("#phonelist").html(cnt);
        })
    }

    function openPhoneSelector(catalog){
        var url='/phone/phone_selector';
        var phones =  window.showModalDialog(url);
        var fireurl ;
        switch(catalog){
            case 0:fireurl='/phone/save_recommend';break;
            case 1:fireurl='/phone/save_coming';break;
            default:;
        }
        $.post(fireurl,'phones='+phones);
    }

    function openSpareSelector(){
        var url='/spare/selector';
        var phones = window.showModalDialog(url);

        var fireurl='/spare/save_recommends';
        $.post(fireurl,'spares='+phones);
    }


    function openNewsSelector(){
        var beans =   window.showModalDialog('/artitle/selector');

        if(beans!=''){
            $.post('/artitle/save_home_artitle',"beans="+beans);

        }
    }

    function loadNews(){
        $("#phonelist").load('/artitle/home_artitle');
    }
</script>