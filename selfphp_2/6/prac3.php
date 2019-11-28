<?php
function processNumber($func) {
    for ($i = 1; $i< func_num_args(); $i++) {
        $result[] = $func(func_get_arg($i));
    }
    return $result;
}

list($x, $y) = processNumber(
    function($num) {return $num * $num;},
    5,15
);

print $x . '<br />';
print $y . '<br />';