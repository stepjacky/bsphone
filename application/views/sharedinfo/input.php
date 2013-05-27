<div id="content">
    <div class="layout">
        <div class="use">
            <div class="use_top"></div>
            <div class="use_bor">
                <div class="use_div">
                    <div class="use_divtop"><small><a target="_blank" href="/welcome/vip"></a></small></div>
                    <div class="share_text">
                        <div class="selectdiv">

                            <strong>我在</strong>
                            <select  id="where" name="where">
                                <option>请选择店面</option>
                                <option value="1">BE数码通信</option>
                                <option value="2">其他手机专卖店</option>
                            </select>
                            <select id="area" name="area">
                            </select>
                            <select style="width:160px;" id="branch_name" name="branch_name"></select>
                            <strong>购买了</strong> <?=val($name)?>

                        </div>
                        <div class="xd">
                            <div class="xd_txt">
                                <p><!--small>你还可以输入<em id="strlen">180</em>字</small--><img src="/resources/images/index/merit.gif" alt=""></p>
                                <p><span><textarea id="use_cont" name="use_cont" ></textarea></span></p>
                            </div>
                            <div class="xd_txt">
                                <p><!--small>你还可以输入<em id="strlen2">180</em>字</small--><img src="/resources/images/index/fault.gif" alt=""></p>
                                <p><span><textarea id="use_cont_fault" name="use_cont_fault" ></textarea></span></p>
                            </div>
                        </div>
                        <div class="use_tips">
                            <span>* 温馨提示：</span>
                            <small>分享手机使用心得可获得 <em>5元</em> 购物基金，同时分享到微博可获得 <em>10元</em>
                                购物基金。什么是 [<a target="_blank"
                                             href="/welcome/vip">购物基金</a>]<br>此平台是会员对所购手机的优点、缺点、使用心得的分享，其它不相关的评论一概删除。</small>
                        </div>
                        <div class="tsfx">
                      <span style="display: none;" class="pl_fx">
                      发表到新浪微博：
                      <label><input type="checkbox" id="turn_send" name="turn_send" value="1"><img src="/resources/images/index/sina.gif" alt=""></label>

                      </span>
                            <small><input type="button" value="" name="submit" id="usepost_button" onclick="add_sharedinfo('<?=val($id)?>','<?=val($name)?>');"></small>
                        </div>
                    </div>
                    <div class="use_divbot"></div>
                </div>
            </div>
            <div class="use_bot"></div>
        </div>

    </div>
</div>
    <script type="text/javascript" src="/resources/scripts/sharedinfo/input.js"></script>
