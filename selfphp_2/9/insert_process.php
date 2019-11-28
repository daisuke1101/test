<?php
require_once '../dbmanager.php';
require_once '../myvalidator.php';

session_start();
if(!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
}

// 入力項目のバリデーションを行う

$v = new MyValidator();
$v->requiredCheck($_POST['isbn'], 'ISBNコード');    // 必須検証
$v->regexCheck($_POST['isbn'], 'ISBNコード', '/^978-4-[0-9]{3,6}-[0-9]{3,6}-[0-9X]{1}$/');  // 正規表現検証
$v->duplicateCheck($_POST['isbn'],'ISBNコード', 'SELECT isbn FROM book WHERE isbn = :value'); // 重複検証
$v->requiredCheck($POST['title'], '書名');  // 必須検証
$v->lengthCheck($_POST['title'], '書名', 100);  // 文字列長検証
$v->intTypeCheck($_POST['price'], '価格');  // 整数型検証
$v->rangeCheck($_POST['price'], '価格', 100000, 1); // 数値範囲検証
$v->inArrayCheck($_POST['publish'], '出版社', array('翔泳社', '秀和システム', '毎日コミュニケーションズ', '技術評論社'));   // 配列要素検証
$v->dateTypeCheck($_POST['published'], '刊行日');   // 日付型検証
$v();

try {
    // 接続確立
    $db = getDb();
    // INSERT準備(名前付きパラメータを推奨)
    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
    // INSERT命令にPOSTデータの内容をセット
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    // INSERT命令を実行
    $stt->execute();
    $db = NULL; // DBを空にする
} catch(PDOException $e) {
    die("ERROR：{$e->getMessage()}");
}
    // 実行後は入力フォームにリダイレクト
header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');