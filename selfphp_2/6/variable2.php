<?php
function sum() {    // 可変長引数の例
    $result = 0;    // 結果を格納する変数

    for ($i = 0; $i < func_num_args(); $i++) {
        $result += func_get_arg($i);
    }
    return $result;
}

print '7+3+10=' . sum(7, 3, 10) . '<br />';
print '11-5+4+88=' . sum(11, -5, 4, 88) . '<br />';