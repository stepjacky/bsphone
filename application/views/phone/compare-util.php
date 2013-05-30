<div style="width: 350px; top: 598px; display:none;" id="basket" class="than">
    <h2>
        <strong>产品比较</strong>
        <small><input type="button" onclick="submitCompare()" name="" class="than_bnt"><a><img onclick="$('#basket').hide();" src="/resources/images/index/close.gif"></a></small>
    </h2>
    <div class="than_list">
        <div class="than_u">
            <ul style="left:0px;width:auto;" id="basketlist">

            </ul>
        </div>
    </div>
</div>
<form id='cmpform' target="_blank">
</form>

<link href='/resources/artdialog/skins/green.css' rel="stylesheet">
<script type="text/javascript" src="/resources/artdialog/jquery.artDialog.min.js"></script>
<script type="text/javascript" src="/resources/template.js"></script>

<script type="text/javascript">

    template.openTag = "<!";
    template.closeTag = "!>";

</script>

<script id="test" type="text/html">

    <li id="than_<!=id!>">
        <p>
            <a title="<!=name!>" href="/phone/one/<!=id!>">
                <img alt="<!=name!>" src="<!=minipic!>">
            </a>
        </p>
        <p>
            <a title="<!=name!>" href="/phone/one/<!=id!>"><!=name!></a>
        </p>
        <p>
            <input type="button" onclick="unsaveCompareMobile('<!=id!>');" value="移除">
        </p>
    </li>

</script>

<script type="text/javascript">



    var cmps = [];
    var num = 0;
    function submitCompare(){
        if(num<=1) {
            $.dialog('比较数量不能少于两个');
            return;
        }
        var nttr = [];
        for(var key in cmps){
            if(cmps[key]!=undefined)
                nttr.push(key);
        }
        var str = nttr.join('_');
        $("#cmpform").attr("action",'/phone/compares/'+str);
        $("#cmpform").get(0).submit();

    }

    function unsaveCompareMobile(id){
        delete cmps[id];
        num--;
        $("#than_"+id).remove();
        updatebasket();
    }

    function saveCompareMobile(id,name,minipic){
        $("#basket").show();
        if(num==3){
            $.dialog('比较数量不能超过三个');
            return;
        }
        if(cmps[id]!=undefined){
            return;
        }
        num++;
        var tdata = {
            'id':id,'name':name,'minipic':minipic
        };
        cmps[id] = tdata;
        updatebasket();
    }


    function updatebasket(){
        $("#basketlist").empty();
        for(var key in cmps){
            var data = cmps[key];
            if(data==undefined)
                continue;
            var html = template.render('test', data);
            $("#basketlist").append(html);
        }
        /* if(console){
         console.log(cmps);
         console.log(num);
         }*/
    }
</script>
