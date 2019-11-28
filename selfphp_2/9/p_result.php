<?php
require_once '../DbManager.php';
try {
    $db = getDb();
    $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
    print '<ul>';
    while ($row = $stt->fetch(PDO::FETCH_OBJ)) {
        print"<li>{$row->title}({$row->publish})</li>";
    }
    $db = NULL;
} catch(PDOException $e) {
    die ("ERROR：{$e->getMessage()}");
}
