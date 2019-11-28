<?php
$now = new DateTime();
print $now->format('Y年m月d日 H:i:s') . '<br />';
print $now->format('Y年m月d日 (D) g:i:s a') . '<br />';
print $now->format('当月の日数：t日') . '<br />';
print $now->format('L') ? 'うるう年です' : 'うるう年ではありません' . '<br />';
print $now->format(DateTime::RSS) . '<br />';