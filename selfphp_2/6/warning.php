<?php
function getTriangleArea($base = 5, $height) {  // ２番目の引数が必須＝デフォルト値ナシ
    return $base * $height / 2;
}

$area = getTriangleArea(10);

print "三角形の面積は {$area} です<br />";