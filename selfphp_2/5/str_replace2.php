<?php
$str = array( 'PHPは良いCGI言語です', 'PHPは良いサーバ実行環境です' );
$src = array( 'PHP', '良い' );
$rep = array( 'PHP 5', '最良の' );
print_r(str_replace($src, $rep, $str, $cnt));
print "{$cnt}個変換しました";