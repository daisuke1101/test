<?php
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ'). '<br />';
print mb_strpos($str, 'にわ', 2). '<br />';
print mb_strpos($str, 'かに'). '<br />';

print mb_strrpos($str, 'にわ'). '<br />';
print mb_strrpos($str, 'にわ', -8). '<br />';