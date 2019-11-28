<?php
try {
    $db=new PDO('mysql:dbname=selfphp;host=localhost', 'root', 'lifearc1101');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print '接続成功';
} catch (PDOException $e) {
    die("ERROR：{$e->getMessage()}");
}