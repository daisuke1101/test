<?php
function product() {
    $result = 1;
    for ($i = 0; $i < func_num_args(); $i++) {
        $result *= func_get_arg($i);
    }
    return $result;
}

$product0 = product(1, 2, 3, 4, 5);
print'引数の総積：' . $product0 . '<br />';