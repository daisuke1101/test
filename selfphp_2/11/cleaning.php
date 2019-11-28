<?php
require_once 'HTMLPurifier/HTMLPurifier.auto.php';

$str = '<div onclick="alert(\'ほげー！\')">HOGEHOGE</div>';
$pur = new HTMLPurifier();
print $pur->purify($str);