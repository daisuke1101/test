<?php
$str = '〒114-0014 東京都北区田端1-9-3';

if (preg_match('/[0-9]{3}-[0-9]{4}/', $str, $data)) {
	//print_r($data);
	print $data[0];
}

