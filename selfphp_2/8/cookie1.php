<?php require_once '../Encode.php'; ?>
<html>
<head>
<title>クッキー情報</title>
</head>
<body>
<form method="POST" action="cookie2.php">
メールアドレス：
<input type="text" name="email" size="40" value="<?php e($_COOKIE['email']); ?>" />
<input type="submit" value="送信する" />
</form>
</body>
</html>