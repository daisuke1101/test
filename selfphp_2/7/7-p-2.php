<?php
$now = new DateTime();
print $now->format('Y年m月d日') . '<br />';
print $now->format('月の末日:t日') . '<br />';
$now->add(new DateInterval('P1M10D'));
print $now->format('Y年m月d日') . '<br />';