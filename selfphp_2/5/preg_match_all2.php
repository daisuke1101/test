<?php
$str = '田端の電話番号は03-3822-1821、今現在は0564-64-4658です。郵便番号は田端が114-0014、今現在は444-0828です。';

if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data,PREG_OFFSET_CAPTURE)) {
    foreach ($data as $item) {
        print "電話番号：{$item[0]}<br />";
        print "市外局番：{$item[1]}<br />";
        print "市内局番：{$item[2]}<br />";
        print "加入者番号：{$item[3]}<br />";
        }
    print_r($data);
}