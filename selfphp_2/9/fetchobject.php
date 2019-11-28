<?php
require_once '../DbManager.php';
require_once './Book.php';

$db = getDb();
    // isbn列の値をキーに書籍情報を取得
$stt = $db->query("SELECT * FROM book WHERE isbn='978-4-7981-1876-5'");
    // 取得した書籍情報をBookクラスにフェッチ(引数は割引率)
if ($row = $stt->fetchObject('Book',array('0.1'))) {
    print "{$row->title}：{$row->discount()}円";
}