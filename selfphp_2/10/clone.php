<?php
require_once 'person.php';

$p1 = new Person('Daisuke', 'Morita');
$p2 = clone ($p1);  // オブジェクトを複製して代入

$p2->firstName = '祥寛';
$p2->lastName = '山田';

// オブジェクト変数代入は、参照渡しがデフォルト
// ただし、cloneメソッドで複製すると…
// 値渡しとなります
print_r ($p2);
print '<br/ >';
print_r ($p1);
print '<br/ >';
