<?php
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];

$file = fopen('access_log.csv', 'ab') or die('ファイルを開けません！');
flock($file,LOCK_EX);
fwrite($file,implode(",",$data) . "\n");
fclose($file);


// １：[]
// ２：fopen
// ３：ab
// ４：or die
// ５：flock
// ６：fwrite
// ７：implode
// ８：,
// ９："\n"
// 10：fclose
