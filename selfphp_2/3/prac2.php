<?php
$a = 1;
$b =& $a;
$a++;

print $a . '<br />';
print $b . '<br />';