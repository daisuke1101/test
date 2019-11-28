<?php require_once '../Encode.php'; ?>
<html>
<head>
<title>ヘッダ情報</title>
</head>
<table border="1">
<?php
    // $_SERVERのキー／値を順に取得
foreach($_SERVER as $key => $value) {
    // キー($key)が「HTTP_」で始まる場合のみ、その値を出力
    if(mb_strpos($key,'HTTP_') === 0) {
?>
    <tr valign="top">
    <th><?php e($key); ?></th>
    <td><?php e($value); ?></td>
    </tr>
<?php
    }
}
?>
</table>
</body>
</html>
