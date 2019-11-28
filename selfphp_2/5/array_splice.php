<?php
$data = array('高江', '青木', '片淵', '和田', '花田', '佐藤');
print_r($data);
print'<br />';

print_r(array_splice($data, 2, 3,array('日尾', '掛谷', '薄井')));
print'<br />';

print_r($data);
print'<br />';

print_r(array_splice($data, -3, -2, array('永田', '杉山')));
print'<br />';

print_r($data);
print'<br />';

print_r(array_splice($data, 3));
print'<br />';

print_r($data);
print'<br />';

print_r(array_splice($data, 1, 0, array('山田', '矢吹')));
print'<br />';

print_r($data);
print'<br />';