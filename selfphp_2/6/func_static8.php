<?php
test();
if (function_exists('getTriangleArea')) {
	$area = getTriangleArea(8,10);
	print "三角形の面積は{$area}です。<br />";
}

function test() {
	function getTriangleArea ($base, $height){
		return $base * $height / 2;
	}
}

