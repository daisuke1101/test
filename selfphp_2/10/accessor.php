<?php
require_once 'trianglefigure.php';

$tri = new TriangleFigure();
$tri->setBase(-10);
$tri->setHeight('PPP');

print "三角形の面積は：{$tri->getArea()}";