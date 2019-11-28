<?php
require_once '../DbManager.php';

$db = getDB();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$db->exec('でたらめ');  // 不正クエリ

if($db->errorCode() !== '00000') {
    $info = $db->errorInfo();
    print "ERROR CODE：{$info
    [0]} <br />";
    print "ERROR CODE(DRIVERS)：{$info[1]} <br />";
    print "ERROR MESSAGES：{$info[2]} <br />";
}