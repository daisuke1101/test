<?php
$data = array ('山田', '日尾', '掛谷', '高江', '和田');
foreach ($data as &$value) {

    $value = 'NEW' . $value;
}

print_r($data);