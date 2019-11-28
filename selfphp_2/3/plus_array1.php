<?php
$assoc1 = array(
    'りんご' => '赤',
    'オレンジ' => '黄',
    'メロン' => '緑'
);
$assoc2 = array(
    'ぶどう' => '紫',
    'りんご' => '緑',
    'いちご' => '赤'
);

$result = $assoc1 + $assoc2;
print_r($result);

// キー重複時(ここでは、'りんご')は、前方(ここでは、'赤')が優先される

$ary1 = array(1 , 3 , 5);
$ary2 = array(2 , 3 , 6);

$result2 = $ary1 + $ary2;
print_r($result2);

// 一般配列の場合、+演算子では結合不可能(array_mergeを用いること)