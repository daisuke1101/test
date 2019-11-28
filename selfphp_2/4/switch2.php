<?php
$drink = 'ワイン';

switch ($drink) {
    case '日本酒' :
    case 'ビール' :
    case 'ワイン' :
    case 'ラム' :
    case '泡盛' :
        print '醸造酒です';
        break;
    case 'ブランデー' :
    case 'ウィスキー' :
        print '蒸留酒です';
        break;
}