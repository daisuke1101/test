<?php
function my_array_walk ($array, $func) {
    foreach ($array as $key => $value) {
        $func ($value, $key);
    }
}

$result = 0;
function sum ($value, $key) {
    global $result;
    $result += $value;
}

$data = array(100, 50, 10, 5);
my_array_walk($data,'sum');
print"合計値：{$result}<br />";