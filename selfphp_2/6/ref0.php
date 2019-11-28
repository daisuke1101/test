<?php
function increment ($num) {
    $num++;
    return $num;
}

$value = 10;
print increment ($value) . '<br />';  // 結果：11
print $value . '<br />';               // 結果：10

// 引数は、値渡し(byVal)されるのが基本