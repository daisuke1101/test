<?php require_once '../Encode.php'; ?>
<html>
<head>
<title>チェック</title>
</head>
<body>
選択されたのは、<?php e(implode(',', $_POST['arch'])); ?>です。<br />
</body>
</html>