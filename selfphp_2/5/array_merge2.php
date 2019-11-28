<?php
$assoc1 = array('Apple' => 'Red', 'Orange' => 'Yellow','Melon' => 'Green',);
$assoc2 = array('Grape' => 'Purple', 'Apple' => 'Green','Strawberry' => 'Red',);

$result2 = array_merge_recursive($assoc1, $assoc2);

print_r($result2);
