<?php
require_once '../DbManager.php';

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO photo(type,data) VALUES (:type, :data)');
    $file = fopen($_FILES['photo']['tmp_name'], 'rb');
    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindvalue(':data', $file, PDO::PARAM_LOB);
    $stt->execute();
    $db = NULL;
} catch(PDOException $e) {
    die("ERROR：{$e->getMessage()}");
}
print 'アップロード終了';