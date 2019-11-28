<?php
$x = 10;

function checkScope() {
    return ++$x;    // あくまでも、{}内の$xはローカル変数であるため、「$xを値０で定義→1だけ増やす」のみ
}

print checkScope() . '<br />';  // ローカル変数$xの値1を返す

print $x . '<br />';    // グローバル変数$xの値10を表示