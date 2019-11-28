<?php
require_once 'Auth/Auth.php';

function myLogin($usr, $status) {
    require_once 'login.php';
}

$auth = new Auth ('MDB2',
    array(
        'dsn' => 'mysqli://selfusr:selfpass@localhost/selfphp_2',
        'table' => 'usr',
        'usernamecol' => 'uid',
        'passwordcol' => 'passwd',
        'db_fields' => '*'
    ), 'myLogin'
);
$auth->start();
if(!$auth->checkAuth()) {die();}