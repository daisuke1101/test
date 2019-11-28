<?php
    // 認証ユーザ名が送信されているかを判定
if(!isset($_SERVER['PHP_AUTH_USER'])) {
    // 認証ユーザが未送信の場合は未認証ステータスを発行
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="SelfPHP"');
    print('この画面へのアクセスは禁止です');
    die();
    // 認証ユーザ名が送信されている場合はユーザ名／PASSWORDを確認
} else {
    // 認証の成否に応じて対応するメッセージを表示
    if ($_SERVER['PHP_AUTH_USER'] === 'admin_usr' && $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
        print '認証成功';
    } else {
        print '認証失敗';
    }
}