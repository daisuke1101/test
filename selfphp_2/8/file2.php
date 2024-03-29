<?php
    // アップロードファイルの情報を取得
$ext = pathinfo($_FILES['upfile']['name']);
    // アップロード許可拡張子を配列で定義
$perm = array('bmp', 'jpeg', 'jpg', 'png', 'gif');

    // アップロードそのものの成否チェック
if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
    $msg = array(
        UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を越えています。',
        UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZEを越えています。',
        UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
        UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
        UPLOAD_ERR_NO_TMP_DIR => '一時保存ディレクトリが存在しません。',
        UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
        UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。'
    );
    $err_msg = $msg[$_FILES['upfile']['error']];
    // 拡張子が許可されたものであるかを判定
} elseif (!in_array(strtolower($ext['extension']), $perm)) {
    $err_msg = '画像以外のファイルはアップロードできません。';
    // ファイルの内容が画像であるかをチェック
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
    $err_msg = 'ファイルの内容が画像ではありません。';
    // エラーチェック終了したらアップロード
} else {
    $src = $_FILES['upfile']['tmp_name'];
    $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS-WIN', 'UTF-8');
    if (!move_uploaded_file($src, 'doc/'. $dest)) {
        $err_msg = 'アップロードに失敗しました。';
    }
}
    // エラー時はメッセージを表示
if (isset($err_msg)) {
    die('<div style="color:Red;">'. $err_msg. '</div>');
}
    // 成功時にはフォームにリダイレクト
header('Location: http://'. $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). '/file1.php');
