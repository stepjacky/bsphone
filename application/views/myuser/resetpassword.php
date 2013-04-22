<link href="/resources/styles/user.css" rel='stylesheet' />
<div class="grid_12">

    <form method="post" action="/myuser/updatepass">

        <input type="hidden" value="<?=$id?>" name="id" />
        <input type="hidden" value="<?=$code?>" name="code" />
        <div class="login_pop_l">
            <dl>
                <dt>密码：</dt>
                <dd>
                    <p class="inputbg1">
                        <input type="password" name="password" ></p>
                    <input type="submit" class="login_bnt4" id="forget_bnt" value="">
                </dd>
            </dl>

        </div>
    </form>


</div>