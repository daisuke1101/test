<?php
function  factorial ($num) {
    if ($num !== 0) {
        return $num * factorial($num - 1);
    }
    return 1;   // $numが0になった場合、ループから脱出する
}

print '5の階乗は、' . factorial(5) . 'です。<br />';