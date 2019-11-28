<?php
require_once '../DbManager.php';

try {
    // DB接続確立
    $db = getDb();
    // memberテーブルに対して新規にレコードをINSERT
    $db->exec("INSERT INTO member (nam, sex, old, enter, memo) VALUES('冬馬由美', '女性', 22, '2010-09-30','')");
    // 直近のINSERTで取得したオートインクリメント値を取得
    print "直近のID値：{$db->lastInsertId()}";
    $db = NULL;
} catch(PDOException $e) {
    die("ERROR：{$e->getMessage()}");
}