<?php
$x = 10;

function checkScope() {
    global $x;
    unset ($x);
    return ++$x;
}

print checkScope() . '<br />';
print $x;