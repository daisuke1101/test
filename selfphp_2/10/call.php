<?php
require_once 'mymail.php';
$m = new MyMail();
$m->From('cbw19090@pop21.odn.ne.jp');
print $m->From();