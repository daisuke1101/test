<?php
$dsn = 'mysql:dbname=selfphp; host=localhost';
$usr= 'root';
$passwd = 'lifearc1101';

try { 
    $db = new PDO($dsn, $usr, $passwd);
    print '接続成功';
    $db = NULL;
} catch (PDOException $e) {
    die("接続できませんでした：{$e->getMessage()}");
}
