<?php
$dir = new DirectoryIterator('./');
foreach ($dir as $file) {
    if ($file->isFile()) {
        print mb_convert_encoding($file->getFilename(), 'UTF-8', 'SJIS-WIN') . '<br />';
    }
}