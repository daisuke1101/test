<?php
function checkStatic() {
    static $x = 0;
    $x++;
    print "unset前：{$x}<br />";
    unset ($x);
    $x = 13;
    print "unset後：{$x}<br />";
}

print checkStatic();
print checkStatic();
print checkStatic();