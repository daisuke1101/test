<?php
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT * FROM book ORDER BY published DESC');
print_r($stt->fetchall(PDO::FETCH_ASSOC));