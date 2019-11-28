<?php
$sum = 0;
$i = 0;
while ($i <= 100) {
    $i++;
    if ($sum > 1000) { break; }
    $sum += $i;
}

print'合計が1000を超えるのは、１~'. --$i . 'を加算したときです。';