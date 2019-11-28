<?php
function refCheck(&$num) {
    print $num. '<br />';   // 1
    $num++;
    unset ($num);
    print $num. '<br />';   // null
}

$num = 1;
refCheck($num);
print $num .'<br />';       // 2
