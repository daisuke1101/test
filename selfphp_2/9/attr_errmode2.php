<?php
require_once '../DbManager.php';

try {
    $db = getDB();
    $db->exec('でたらめ');  // 不正クエリ
} catch (PDOException $e) {
    print "ERROR CODE：{$e->getCode()} <br />";
    print "ERROR MESSAGES：{$e->getMessage()} <br />";    
}