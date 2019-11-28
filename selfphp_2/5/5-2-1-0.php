<?php
$data = array('高江', '青木', '片淵');

print_r($data);
print '<br />';

array_push($data, '山田', '日尾');
print_r($data);
print '<br />';

array_unshift($data, '掛谷', '土井');
print_r($data);
print '<br />';

print_r(array_slice($data, 2, 3));
print '<br />';



