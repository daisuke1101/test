<?php
require_once '../Encode.php';
$cnt = e($_COOKIE['cnt']) + 1;
setcookie('cnt', $cnt, time() + 60 * 60 * 24 * 90);
print "{$cnt}回目です。";