<?php
require_once 'person.php';

$p1 = new Person('Daisuke', 'Morita');

$p2 = $p1;  // 参照渡しの場合
var_dump($p1 == $p2);
var_dump($p1 === $p2);

$p3 = clone $p1;    // 値渡し(clone)の場合
var_dump($p1 == $p3);
var_dump($p1 === $p3);
