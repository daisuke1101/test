<h1 align = "center">ログイン</h1>
<hr />
<form method = "POST" action = "">
    <div style = "text-align:center">
        <p>
        ユーザ名：
        <input type = "text" name = "username" size = "20" maxlength = "30" />
        </p>
        <p>
        PASSWORD：
        <input type = "password" name = "password" size = "20" maxlength = "30" />
        </p>
        <p>
            <input type = "submit" value = "ログイン" />
        </p>
        <!-- エラーメッセージ用 -->
        <div style = "color:Red"><?php print $errs[$status]; ?></div>
    </div>
</form>