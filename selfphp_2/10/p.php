<?php
require_once 'triangle.php';
require_once 'square.php';

$tri = new Triangle(5, 10);
$sq = new Square(5, 10);

print "三角形の面積は｛$tri->getArea()｝<br />";
print "四角形の面積は｛$sq->getArea()｝<br />";