<?php
function checkStatic() {
    static $x = 0;  // ローカル変数$xを維持する(静的変数化)
    return ++$x;
}

print checkStatic() . '<br />';    // $x = 1
print checkStatic() . '<br />';    // $x = 2