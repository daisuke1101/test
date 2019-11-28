<?php
$x = 10;

function checkScope() {
    global $x;      // $xをグローバル関数とみなす
    return ++$x;    // globalステートメントで、{}内の$xがグローバル変数とみなされたため、「$xの値は11となる」
}

print checkScope() . '<br />';  // 変数$xの値11を返す

print $x . '<br />';    // グローバル変数$xの値11を表示