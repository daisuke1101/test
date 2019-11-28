<?php
function getDb() {
    $dsn = 'mysql:dbname=selfphp; host=localhost';
    $usr = 'root';
    $passwd = 'lifearc1101';

    try {
        // 接続を確立
            $db = new PDO($dsn, $usr, $passwd);
        // エラー処理ルーチン用
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // 文字コードをUTF8に設定
            $db->exec('SET NAMES utf8');
    } catch (PDOException $e) {
        die("接続失敗：{$e->getMessage()}");
    }
    return $db;
}