<?php
session_start();
$_SESSION['email'] = $_POST['email'];
?>
<html>
<head>
<title>セッション情報</title>
</head>
<body>
セッションを保存しました。
</body>
</html>