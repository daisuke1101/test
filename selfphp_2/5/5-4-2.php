<?php
$str = 'お問い合わせは daisuke.hokut.sayama.381@gmail.com まで';

print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="mailto:$0">$0</a>', $str);

