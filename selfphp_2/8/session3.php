<?php
session_start();
// セッションを空に
$_SESSION = array();
// セッションIDはクッキー情報として保管される
// セッションクッキーが存在する場合は破棄
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
// セッションを破棄
session_destroy();