<?php
function square($base = 1, $height = 1) {
    return $base * $height;
}

print '1*1：' . square() . '<br />';
print '3*1：' . square(3) . '<br />';
print '3*4：' . square(3, 4) . '<br />';