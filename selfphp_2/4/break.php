<?php
$sum = 0;
for ($i = 1; $i <=100; $i++) {
    if ($sum > 1000) {
        break;
    }
    $sum += $i;
}

print $sum . "<br />";

print '合計が1000を超えるのは、1~'.--$i. 'を加算したときです';
