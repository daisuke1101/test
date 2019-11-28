<?php
require_once '../Encode.php';
session_start();
?>
<html>
<head>
<title>セッション情報</title>
</head>
<body>
<form method="POST" action="session2.php">
メールアドレス：
<input type="text" name="email" size="40" value="<?php e($_SESSION['email']); ?>" />
<input type="submit" value="送信する" />
</form>
</body>
</html>