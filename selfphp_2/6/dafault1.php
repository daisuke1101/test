<?php
function getTriangleArea($base = 1, $height = 1) {
    return $base * $height / 2;
}

$area = getTriangleArea();
print "三角形の面積は {$area} です<br />";

$area = getTriangleArea(10);
print "三角形の面積は {$area} です<br />";

$area = getTriangleArea(10, 5);
print "三角形の面積は {$area} です<br />";
