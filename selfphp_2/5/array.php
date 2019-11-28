<?php
$data = array('高江', '青木', '片淵');
print array_push($data, '山田', '土井') . '<br />';
print_r($data);
print'<br />';

print array_pop($data) . '<br />';
print_r($data);
print'<br />';

print array_shift($data) . '<br />';
print_r($data);
print'<br />';

print array_unshift($data, '掛谷', '横塚', '上垣') . '<br />';
print_r($data);
print'<br />';