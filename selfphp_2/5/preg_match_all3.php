<?php
$str = '田端の電話番号は03-3822-1821、今現在は0564-64-4658です。郵便番号は田端が114-0014、今現在は444-0828です。';

if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data,PREG_PATTERN_ORDER)) {
		print "<table>";
		print "<tr><th>電話番号[0]</th><th>電話番号[1]</th>";
        foreach($data as $item){
        print "<tr><td>{$item[0]}</td><td>{$item[1]}</td>";
        }
        print"</table>";
}