<?php
$str = 'にわにはにわにわとりがいる';

if (mb_strpos($str,'にわ') !== FALSE ) {
    print '文字列が見つかりました<br />';
}