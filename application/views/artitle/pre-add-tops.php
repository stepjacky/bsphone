<form id="tform">
<table class="table  table-bordered table-hover">
    <thead>
    <tr>

        <th>图片</th>
        <th>链接</th>
        <th>类型</th>
    </tr>

    </thead>

    <tbody id="tbodys">

    </tbody>

    <tfoot>
      <tr>
          <td>


          </td>
          <td>
            <button
                type="button"
                class="btn btn-info"
                onclick="addLine()"
                >添加链接</button>


        </td>
        <td>
            <button
                type="button"
                class="btn btn-success"
                onclick="saveLine()"
                >保存</button>


        </td>


      </tr>
    </tfoot>
 </table>
</form>
<script src='/resources/template.js' type="text/javascript"></script>

<script id="test" type="text/html">
    <tr>
      <td>

          <input name="image[]" type="text" readonly="true" onclick="setPicture(this)"/>
          <img width="100" height="100" />

      </td>
      <td><input name="href[]"  type="text" class="input-xlarge"/> </td>
      <td>
          <input type="hidden" name="position[]" value="<?=$pos?>"/>
          <button class="btn btn-link" onclick="removeMe(this)">
              <i class="icon-remove-circle"></i>
          </button>
      </td>

    </tr>
</script>
<script type="text/javascript">

    function addLine(){
        var data = {};
        var html = template.render('test', data);
        $("#tbodys").append(html);
    }

    function saveLine(){
        var data = $("#tform").serialize();
        $.post('/artitle/save_home_artitle',data);
    }

    function removeMe(self){
        $(self).parent().parent().remove();
    }

    function setPicture(self){
        var ps = window.showModalDialog('/picture/selector');

        if(ps==null || ps=='' || ps==undefined) return;
        this.value = ps;
        $(self).val(ps);
        $(self).siblings('img').attr('src',ps);



    }
</script>
