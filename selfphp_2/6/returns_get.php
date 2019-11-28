<?php
require_once 'returns.php';

$result = max_min(10, 2, -5, 3, 78);
print_r($result);
print'<br />';
list($max, $min) = max_min(10, 2, -5, 3, 78);   // max_min()関数から返された配列の内容を、$max,$minに振り分け
print"最大値：{$max}、最小値：{$min}<br />";