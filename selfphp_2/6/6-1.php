<?php

function diamond($diagonal1, $diagonal2) {
	return $diagonal1 * $diagonal2 / 2;
}

$area = diamond(8, 10);
print "ひし形の面積は{$area}です。<br />";
