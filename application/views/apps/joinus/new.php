<div class="join_lump">

<div class="join_ceng">

    <div class="join_piece">
        <div class="join_title">
            <img width="199" height="50" title="加盟动态" alt="加盟动态" src="/resources/images/index/join_07.jpg">
            <a title="更多动态 &gt;&gt;" target="_blank" href="/join/join_active.aspx">更多动态 &gt;&gt;</a>
        </div>
        <div class="clerboth">
            &nbsp;</div>
        <div class="join_news">
            <ul>

                <?php foreach($trends as $trd):

                extract($trd);

                ?>

                <li><span><a title="<?=$name?>" target="_blank" href="/trends/joinus/<?=$id?>">
                    <?=$name?></a></span> [<?=date('Y-m-d', strtotime($firedate))?>]</li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>
    <div class="join_chunk">
        <div class="join_caption">
            <img width="199" height="50" title="即将开业" alt="即将开业" src="/resources/images/index/join_74.jpg">
            <span><a title="更多加盟店信息" target="_blank" href="/welcome/servicecenter">更多加盟店信息 »</a></span>
        </div>
        <div class="join_pictrue">

        </div>
    </div>

</div>

<div class="join_head">
    <img width="199" height="50" title="现有店铺" alt="现有店铺" style="margin-top: -1px" src="/resources/images/index/join_75.jpg">
                           <!--
                            <span class="join_choose">
                                <select onchange="onLoadCity();" id="cltLocationSelect1_ddlProvince" name="cltLocationSelect1$ddlProvince">
                                    <option value="0" selected="selected">请选择省份</option>
                                    <option value="1">北京市</option>
                                    <option value="2">天津市</option>
                                    <option value="3">河北省</option>
                                    <option value="4">山西省</option>
                                    <option value="5">内蒙古</option>
                                    <option value="6">辽宁省</option>
                                    <option value="7">吉林省</option>
                                    <option value="8">黑龙江</option>
                                    <option value="9">上海市</option>
                                    <option value="10">江苏省</option>
                                    <option value="11">浙江省</option>
                                    <option value="12">安徽省</option>
                                    <option value="13">福建省</option>
                                    <option value="14">江西省</option>
                                    <option value="15">山东省</option>
                                    <option value="16">河南省</option>
                                    <option value="17">湖北省</option>
                                    <option value="18">湖南省</option>
                                    <option value="19">广东省</option>
                                    <option value="20">广  西</option>
                                    <option value="21">海南省</option>
                                    <option value="22">重庆市</option>
                                    <option value="23">四川省</option>
                                    <option value="24">贵州省</option>
                                    <option value="25">云南省</option>
                                    <option value="26">西  藏</option>
                                    <option value="27">陕西省</option>
                                    <option value="28">甘肃省</option>
                                    <option value="29">青海省</option>
                                    <option value="30">宁  夏</option>
                                    <option value="31">新  疆</option>
                                    <option value="32">台湾省</option>
                                    <option value="33">香  港</option>
                                    <option value="34">澳  门</option>
                                </select><select onchange="onLoadDistrict();" id="cltLocationSelect1_ddlCity" name="cltLocationSelect1$ddlCity"><option value="0">请选择你所在的城市</option></select><select onchange="LoadShopTable();" id="cltLocationSelect1_ddlDistrict" name="cltLocationSelect1$ddlDistrict"><option value="0">请选择你所在的地区</option></select>



<script type="text/javascript" language="javascript">
    var defCity = "0";
    var defDistrict = "0"
    if (defCity == "") {
        defCity = "0";
    }
    if (defDistrict == "") {
        defDistrict = "0";
    }
    var ddlProvince = 'cltLocationSelect1_ddlProvince';

    var ddlCity = 'cltLocationSelect1_ddlCity';

    var ddlDistrict='cltLocationSelect1_ddlDistrict'
    var onLoadCity = function () {

        var did = $("#" + ddlProvince).val();
        //alert(did);
        $.ajax({
            type: "POST",
            url: "/lib/xml-rpc/LocationSelecte.ashx?act=city",
            data: { "did": did },
            dataType: "json",
            async: false,
            error: function () {
                alert("请求错误，请重新点击！");
            },
            success: function (dt) {
                $("#" + ddlCity).empty();

                $("#" + ddlCity).append("&lt;option value=\"0\" &gt;请选择你所在的城市&lt;/option&gt;");
                if (dt.issuccess != "false") {
                    for (var i = 0; i &lt; dt.dtCity.length; i++) {
                        //                        var option = "";
                        //                        if (dt.dtCity[i].id == defCity) {
                        //                            option = "&lt;option value=" + dt.dtCity[i].id + " selected=\"true\" &gt;" + dt.dtCity[i].name + "&lt;/option&gt;";
                        //                        } else {
                        var option = "&lt;option value='" + dt.dtCity[i].id + "' &gt;" + dt.dtCity[i].name + "&lt;/option&gt;";
                        //}
                        $("#" + ddlCity).append(option);
                    }

                }

            }
        });

        $("#" + ddlCity).val(defCity);
        onLoadDistrict();

    }

    var onLoadDistrict = function () {
        var cid = $("#" + ddlCity).val();

        //alert(cid);
        $.ajax({
            type: "POST",
            url: "/lib/xml-rpc/LocationSelecte.ashx?act=district",
            data: { "cid": cid },
            dataType: "json",
            error: function () {
                alert("请求错误，请重新点击！");
            },
            success: function (dt) {
                $("#" + ddlDistrict).empty();
                $("#" + ddlDistrict).append("&lt;option value=\"0\" &gt;请选择你所在的地区&lt;/option&gt;");
                if (dt.issuccess != "false") {

                    for (var i = 0; i &lt; dt.dtDistrct.length; i++) {

                        var options = "";
                        if (dt.dtDistrct[i].id == defDistrict) {
                            options = "&lt;option value='" + dt.dtDistrct[i].id + "' selected=\"selected\" &gt;" + dt.dtDistrct[i].name + "&lt;/option&gt;";
                        } else {
                            options = "&lt;option value='" + dt.dtDistrct[i].id + "' &gt;" + dt.dtDistrct[i].name + "&lt;/option&gt;"
                        }
                        $("#" + ddlDistrict).append(options);
                    }
                }
            }
        });
//        alert(defDistrict);
//        $("#" + ddlDistrict).val(defDistrict);
        //alert($("#" + ddlDistrict).val());
    }

    var onSetDefaultCity = function() {
        for(var i=0; i&lt;$("#" + ddlCity).size(); i++) {
            if($("#" + ddlCity).options[i].value == defCity) {
                $("#" + ddlCity).options[i].selected = true;
            }
        }
    }
    var onSetDefaultDistrict = function () {
        for (var i = 0; i &lt; $("#" + ddlDistrict).options.length; i++) {
            if ($("#" + ddlDistrict).options[i].value == defDistrict) {
                $("#" + ddlDistrict).options[i].selected = true;
            }
        }
    }
    onLoadCity();
</script>
-->
                            </span>
</div>
<div id="Allshop" class="join_pic">

    <?php foreach($beans as $shop):
      extract($shop);

    ?>
    <div class="join_ture">
           <span class="join_photo">
               <a title="<?=$name?>" target="_blank" href="/welcome/servicecenter/<?=$id?>/s">
                    <img width="156" height="106" alt="<?=$name?>" src="<?=$minipic?>">
               </a>
           </span>
        <strong><a title="<?=$name?>" target="_blank" href="/welcome/servicecenter/<?=$id?>/s">
            <?=$name?></a></strong> <span class="join_diction">
                                                开业时间：2005年01月08日</span>
    </div>

   <?php endforeach;?>

</div>
</div>