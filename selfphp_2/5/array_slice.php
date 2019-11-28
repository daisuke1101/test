<?php
$data = array('高江', '青木', '片淵', '和田', '花田', '佐藤');
print_r ($data);
print '<br />';

print_r (array_slice($data, 2, 3));
print '<br />';

print_r ($data);
print'<br />';

print_r(array_slice($data, 2, 3, TRUE));
print'<br />';

print_r ($data);
print '<br />';

print_r(array_slice($data, 4));
print '<br />';

print_r ($data);
print '<br />';

print_r(array_slice($data, 4, 2, TRUE));
print '<br />';

print_r ($data);
print '<br />';

print_r(array_slice($data,-4, -3));
print '<br />';

print_r ($data);
print '<br />';

print_r(array_slice($data,-4, -3, TRUE));
print '<br />';

print_r ($data);
print '<br />';