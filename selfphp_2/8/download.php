<?php
$fl = $_GET['path'];

$flag = FALSE;  // ホワイトリストマッチング用

$dir = new DirectoryIterator('./doc/');
foreach ($dir as $file) {
    // クエリ情報pathと等しいファイルが存在する場合のみ、$flagをTRUEに設定
    if ($file->isfile() && $file->getFileName()) === $fl {
        $fl = $file->getFileName();
        $flag = TRUE;
        break;
    }
}

if (!$flag) {
    die('不正な要求です');
}

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename= "'.$fl.'"');
print file_get_contents("./doc/{$fl}");