<table border = "1">
<tr>
	<th>アクセス日時</th><th>スクリプト名</th>
	<th>ユーザエージェント</th><th>リンク元URL</th>
</tr>
<?php
	// ファイルを読み取り専用でオープン
$file = fopen('access.log', 'rb');
	// ファイルを共有(SHARE)ロック
flock($file, LOCK_SH);
	// 行単位でテキストを読込み＆タブで分割
while($fline = fgets($file, 1024)) {
	$line = explode("\t",$fline);
	print '<tr>';
		// 分割した結果を順に出力
	foreach ($line as $value) {
		print '<td>' . $value . '</td>';
	}
	print '</tr>';
}
	// ファイルをクローズ
fclose($file);
?>
</table>
