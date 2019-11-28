<?php
require_once 'pear/Command/Auth.php';
    // 認証フォーム呼び出し用ユーザ定義関数
function myLogin($usr, $status) {
    // エラーメッセージを連想配列で用意
    $errs = array(
        AUTH_IDLED => 'アイドル時間を越えておりますので、再ログインをお願い致します。',
        AUTH_EXPIRED => '期限が過ぎましたので、再ログインをお願い致します。',
        AUTH_WRONG_LOGIN => 'ログインできませんでした。'
    );
    // 認証フォーム呼び出し
    require_once 'login.php';
}

    // Authクラスのインスタンス化
$auth = new Auth('MDB2',
    array(
        'dsn' => 'mysqli://selfusr:selfpass@localhost/selfphp',
        'table' => 'usr',
        'usernamecol' => 'uid',
        'passwordcol' => 'passwd',
        'db_fields' => '*'
    ), 'myLogin'
);
    // 認証
$auth->start();
    // 成否を判定
if(!$auth->checkAuth()) {die();}