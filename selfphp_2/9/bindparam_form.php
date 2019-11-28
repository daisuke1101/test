<?php
require_once '../DbManager.php';

try {
    $db = getDb();

    $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
    
    $cnt = 0;
?>

<html>
<head>
<title>既存データ更新</title>
</head>
<body>
<form method="POST" action="bindparam_process.php">
<input type="submit" value="更新する" />
<table border="1">
<tr>
    <th>ISBNコード</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
</tr>
<?php

while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    $cnt++;
?>
    <tr>
    <td>
        <?php print($row['isbn']); ?>
        <input type="hidden" name="isbn<?php print($cnt); ?>" value="<?php print($row['isbn']); ?>" />
    </td><td>
        <input type="text" name="title<?php print($cnt); ?>" value="<?php print($row['title']); ?>" size="35" />
    </td><td>
        <input type="text" name="price<?php print($cnt); ?>" value="<?php print($row['price']); ?>" size="5" />
    </td><td>
        <input type="text" name="publish<?php print($cnt); ?>" value="<?php print($row['publish']); ?>" size="12" />
    </td><td>
        <input type="text" name="published<?php print($cnt); ?>" value="<?php print($row['published']); ?>" size="12" />
    </td>
    </tr>
<?php
    }
} catch (PDOException $e) {
    die("ERROR：{$e->getMessage()}");
}
?>
</table>
<input type="hidden" name="cnt" value="<?php print($cnt); ?>" />
</form>
</body>
</html>