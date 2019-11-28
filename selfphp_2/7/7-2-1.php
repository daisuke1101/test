<?php
$fmt = 'Y年m月d日';
$date = '2010年12月04日';
$dt = DateTime::createFromFormat($fmt, $date);
print $dt->format('Y/m/d (l)');