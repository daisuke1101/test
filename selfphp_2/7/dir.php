<table border="1">
<tr>
<th>ファイル</th><th>サイズ</th><th>最終アクセス日</th><th>最終更新日</th>
</tr>

<?php
    // カレントディレクトリをオープン
$dir = new DirectoryIterator('./');
    // ディレクトリの内容を順番に読み込み
foreach ($dir as $file) {
    // 読み込んだ要素がファイルである(サブディレクトリなどではない)場合のみ表示する
    if($file->isFile()) {
?>
    <tr>
        <td><?php print mb_convert_encoding($file->getFileName(),'UTF-8', 'SJIS-WIN'); ?></td>
        <td><?php print $file->getSize(); ?>B</td>
        <td><?php print date('Y/m/d H:i:s', $file->getATime()); ?></td>
        <td><?php print date('Y/m/d H:i:s', $file->getMTime()); ?></td>
    </tr>
<?php
    }
}
?>
</table>