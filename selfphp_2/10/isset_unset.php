<?php
require_once 'mymail.php';

$m = new MyMail();
$m->From = 'd.morita@lifearcsystem.co.jp';
var_dump($m->From);
var_dump(isset($m->From));
unset($m->From);
var_dump($m->From);