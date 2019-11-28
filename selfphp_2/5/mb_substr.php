<?php
$str = 'WINGSプロジェクト';

print mb_substr($str, 5, 2). '<br />';    // ６文字目から２文字分取得
print mb_substr($str, 5). '<br />';       // ６文字目以降をすべて取得
print mb_substr($str, 5, -4). '<br />';   // ６文字目以降すべてのうち、末尾４文字分を切り捨てて取得
print mb_substr($str, -6, 2). '<br />';   // 後方６文字目から２文字分取得