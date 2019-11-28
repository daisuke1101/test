<?php
$now = new DateTime('2020/7/22 09:00:00');  // 引数に日付／時刻文字列を入れた場合
print $now->format('Y年m月d日 H:i:s');