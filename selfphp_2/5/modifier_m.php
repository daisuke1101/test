<?php
$str = "7人のDWARFとSNOW WHITE\n101 DARMATIANS";

if (preg_match_all('|^[0-9]{1,}|', $str, $data)) {
	foreach ($data[0] as $item) {
		print "マッチング結果：{$item}<br />";
	}
}
