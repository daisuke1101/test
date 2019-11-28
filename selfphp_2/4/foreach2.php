<?php
$data = array(
    '山田' => '千葉',
    '掛谷' => '広島',
    '日尾' => '群馬',
    '本多' => '埼玉',
    '矢吹' => '岐阜'
    );

foreach ($data as $key => $value) {
    print "{$key} ： {$value} <br />";
}