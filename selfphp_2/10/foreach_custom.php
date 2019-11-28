<?php
require_once 'person.php';
require_once 'memberlist.php';

$list = new MemberList();
$list->add(new Person('Daisuke', 'Morita'));
$list->add(new Person('祥寛', '山田'));
$list->add(new Person('日尾', '有宏'));

foreach ($list as $value) {
    print $value->show() . '<br />';
}
