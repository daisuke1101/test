<?php
require_once 'person.php';

$p1 = new Person('Daisuke', 'Morita');
$p2 = $p1;  // オブジェクトを代入

$p2->firstName = '祥寛';
$p2->lastName = '山田';

// オブジェクト変数代入は、参照渡しがデフォルト
print_r ($p2);
print '<br/ >';
print_r ($p1);
print '<br/ >';
