<?php
$data = array(
    array('なし', 'ぶどう', 'いちご'),
    array('メロン', 'パパイヤ', 'キウイフルーツ'),
    array('レモン', '八朔', 'スダチ')
);
print count($data) . '<br />';
print count($data, COUNT_RECURSIVE) . '<br />';