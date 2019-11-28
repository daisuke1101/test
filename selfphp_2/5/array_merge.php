<?php
$ary1 = array(1, 3, 5);
$ary2 = array(2, 3, 6);
$result = array_merge($ary1, $ary2);

print_r($result);
print '<br />';

$assoc1 = array('Apple' => 'Red', 'Orange' => 'Yellow','Melon' => 'Green',);
$assoc2 = array('Grape' => 'Purple', 'Apple' => 'Green','Strawberry' => 'Red',);

$result2 = array_merge($assoc1, $assoc2);

print_r($result2);
