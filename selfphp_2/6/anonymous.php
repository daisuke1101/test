<?php
function my_array_walk ($array, $func) {
    foreach($array as $key => $value) {
        $func($value, $key);
    }
}

$data = array('杉山', '永田', '杉沼', '和田', '土井');
my_array_walk($data, 
    function ($value, $key) {
        print"{$key}：{$value}<br />";
    });