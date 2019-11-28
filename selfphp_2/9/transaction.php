<?php
require_once '../DbManager.php';

try {

    $db = getDb();

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->beginTransaction();
    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-4-7981-1257-2', '独習ASP.NET2.0', 4179, '翔泳社', '2007-02-20')");

    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-4-7981-1257-2', '独習ASP.NET5.0', 3500, '翔泳社', '2015-10-05')");

    $db->commit();
} catch(PDOException $e) {

    $db->rollback();
    print "ERROR：{$e->getMessage()}";
}