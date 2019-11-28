<table border = "1">
<tr>
	<th>アクセス日時</th><th>スクリプト名</th>
	<th>ユーザエージェント</th><th>リンク元URL</th>
</tr>
<?php
	// ファイルをまとめて読み込み、配列に格納(ロックは不要)
$file = file('access.log');
	// 配列に格納された行を逐次処理

foreach($file as $fline) {
		// タブ文字で行単位のテキストを分割
	$line = explode("\t",$fline);
	print '<tr>';
		// 分割した結果を順に出力
	foreach ($line as $value) {
		print '<td>' . $value . '</td>';
	}
	print '</tr>';
}
	// ファイルアンロックは不要
?>
</table>
