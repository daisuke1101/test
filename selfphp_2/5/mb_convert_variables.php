<?php
$data = array('山田', '和田', '杉山', '掛谷', '野田');
mb_convert_variables('EUC-JP', 'UTF-8', $data);
// mb_convert_variables('EUC-JP', 'UTF-8, SJIS, JIS', $data);   // 環境によっては、Cannot handle recursive references inとなる
print_r($data);