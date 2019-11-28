<?php
require_once 'person.php';

$p = new Person();

$p->lastName = '山田';
$p->firstName = 'リオ';

$p->show();