<?php
function my_array_walk ($array, $func) {
    foreach($array as $key => $value) {
        $func($value, $key);
    }
}

function showItem ($value, $key) {
    print"{$key}：{$value}<br />";
}

$data = array('杉山', '永田', '杉沼', '和田', '土井');
my_array_walk($data, 'showItem');