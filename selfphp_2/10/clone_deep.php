<?php
require_once 'person.php';
require_once 'memberlist.php';

$list = new MemberList();
$list->add(new Person('Daisuke', 'Morita'));
$list->add(new Person('祥寛', '山田'));
$list->add(new Person('哲史', '峰広'));

print $list(1);

$list2 = clone $list;

var_dump($list2(1) === $list(1));