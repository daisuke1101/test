<?php
function sum() {    // 可変長引数の例
    $result = 0;    // 結果を格納する変数
    $args = func_get_args();    // 引数を配列として取得
    foreach ($args as $arg) {   // 配列を展開し、逐次加算
        $result += $arg;
    }
    return $result;
}

print '7+3+10=' . sum(7, 3, 10) . '<br />';
print '11-5+4+88=' . sum(11, -5, 4, 88) . '<br />';