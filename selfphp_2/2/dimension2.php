<?php
$data2 = array(
    array(
        array('S-なし' , 'M-なし' , 'L-なし'),
        array('S-りんご' , 'M-りんご' , 'L-りんご'),
        array('S-洋ナシ' , 'M-洋ナシ' , 'L-洋ナシ'),
    ),
    array(
        array('S-もも' , 'M-もも' , 'L-もも'),
        array('S-すもも' , 'M-すもも' , 'L-すもも'),
        array('S-プラム' , 'M-プラム' , 'L-プラム'),
    ),
    array(
        array('S-みかん' , 'M-みかん' , 'L-みかん'),
        array('S-八朔' , 'M-八朔' , 'L-八朔'),
        array('S-ネーブル' , 'M-ネーブル' , 'L-ネーブル'),
    ),
);

print $data2[0][1][2];
print '<br/>';

print_r($data2);

print '<br/>' . count($data2,COUNT_NORMAL) . '<br />';
print count($data2,COUNT_RECURSIVE) . '<br />';