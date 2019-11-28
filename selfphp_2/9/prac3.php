<form method="POST" action="prac3.php">
書名
<input type="text" name="title" size="20" />
<input type="submit" value="検索" />
</form>

<?php
if ($_POST['title'] != '') {
    require_once '../DbManager.php';
    try {
        $db = getDb();
        $stt = $db->prepare('SELECT * FROM book WHERE title LIKE ?');
        $stt->bindValue(1, '%'.$_POST['title'].'%');
        $stt->execute();
        print '<ul>';
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            print "<li>{$row['title']} ({$row['price']}円)</li>";
        }
        print '</ul>';
        $db = NULL;
    } catch (PDOException $e) {
        print "ERROR：{$e->getMessage()}";
    }
}
?>