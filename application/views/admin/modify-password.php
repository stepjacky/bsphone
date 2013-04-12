<form class="form-horizontal" id="mform">
    <div class="control-group">
        <label class="control-label" for="inputEmail">用户名</label>
        <div class="controls">
            <input type="text"  name="username"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">新密码</label>
        <div class="controls">
            <input type="password" name="password"    />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="button" class="btn" onclick="modifyPassword()">修改</button>
        </div>
    </div>
</form>

<div class="alert alert-info hidden" id="afix">
    <strong>提示!</strong>
        密码已经修改
</div>

<script type="text/javascript">
    function modifyPassword(){

       var data =  $("#mform").serialize();
       $.post('/admin/modify_password',data,function(){
           $("#afix").show();
       });

    }

</script>

