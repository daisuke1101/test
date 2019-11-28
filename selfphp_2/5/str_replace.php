<?php
$str = 'にわにはにわにわとりがいる';
print str_replace( 'にわ', 'ニワ', $str, $cnt) . '<br />';  // $cntには、変換した文字列の個数が格納される
print "{$cnt} 個変換しました<br />";