<link href="/resources/styles/brand/style.css" media="screen" rel="stylesheet" type="text/css"/>
<form id="brandform" method="post">

    <fieldset>
        <legend>编辑/新增-手机品牌</legend>
        <table class="table table-hover table-bordered">
            <tbody>

            <tr>
                <td>编号</td>
                <td> <input id="id" type="text" name="id" value="<?php echo isset($id)?$id:''?>" />

                </td>
            </tr>

            <tr>


                <td>名称</td>
                <td>
                    <input name="name" id="name" type="text" value="<?php echo isset($name) ? $name : ''?>"
                           class=" input-large"/>
                </td>

            <tr>


            <tr>
                <td>图片</td>
                <td>
                    <input id="picture" type="hidden" name="picture" value="<?php echo isset($picture) ? $picture : ''?>"/>
                    <img src="<?php echo isset($picture) ? $picture : ''?>" style="width: 64px;height: 64px"/>

                </td>

            <tr>


            <tr>
                <td>备注</td>
                <td>
                    <textarea id="remark" name="remark"
                              class=" input-xxlarge"><?php echo isset($remark) ? $remark : ''?></textarea>
                </td>

            <tr>


            </tbody>
            <tfoot>
            <tr>
                <td>

                </td>
                <td>
                    <button class="btn btn-success" id="saveBtn" type="button">保存</button>
                    <button class="btn" type="reset">重置</button>
                </td>
            </tr>
            </tfoot>
        </table>
    </fieldset>
</form>
<script type="text/javascript" src="/resources/bootstrap/js/locales/bootstrap-datepicker.zh-CN.js"
        charset="UTF-8"></script>
<script type="text/javascript" src="/resources/scripts/brand/edit.js"></script>