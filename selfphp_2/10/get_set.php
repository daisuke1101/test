<?php
require_once 'mymail.php';

$m = new MyMail();

$m->to = 'daisuke.hokut.sayama.381@gmail.com';
$m->subject = 'テスト';
$m->message = 'テストです';

$m->From = 'd.morita@lifearcsystem.co.jp';
$m->X_Mailer = 'MyMail 1.0';
$m->X_Priority = 1;
$m->X_MSMail_Priority = 'High';

$m->send();
