<?php
	// 書き込み内容を配列$dataにセット
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];
	// access.logを追記書き込みモードでオープン
$file = fopen('access.log', 'ab') or die('FILE Can\'t OPEN!!');
	// ファイルをロック
flock($file, LOCK_EX);
	// ファイル書き込み
fwrite($file, implode("\t",$data) . "\n");
	// ファイルを閉じる
fclose($file);
print 'アクセスログ記録終了<br />';

