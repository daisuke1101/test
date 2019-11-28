<?php
function checkStatic() {
    $x = 0;
    return ++$x;
}

print checkStatic() . '<br />';    // $x = 1
print checkStatic() . '<br />';    // $x = 1