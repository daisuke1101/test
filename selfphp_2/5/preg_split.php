<?php
$today = '2019-09-26';
$result = preg_split('|[/.\-]|',$today, 5, PREG_SPLIT_DELIM_CAPTURE);
print "{$result[0]} ”N {$result[1]} ŒŽ {$result[2]} “ú";

