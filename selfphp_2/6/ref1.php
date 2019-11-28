<?php
function increment (&$num) {    // &をつけると、参照渡しとなる
    $num++;
    return $num;
}

$value = 10;
print increment ($value) . '<br />';  // 結果：11
print $value . '<br />';               // 結果：11

// 値渡しされた変数：変数に格納された「値」であり、変数そのもの(アドレス)ではない
// 参照渡しされた変数：変数そのもの