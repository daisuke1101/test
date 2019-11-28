<?php
$dt1 = new DateTime('2010/5/15 10:58:31');
$dt2 = new DateTime('2010/12/05');
$interval = $dt1->diff($dt2, FALSE);
print $interval->format('%Y年%M月%d日 %H時間%I分%S秒') . '<br />';