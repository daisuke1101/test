<?php
$language = 'PHP';

switch ($language) {
    case 'PHP' :
    case 'JSP' :
    case 'ASP' :
        print "サーバサイド";
        break;
    case 'JavaScript' :
    case 'VBScript' :
        print "クライアントサイド";
        break;
    default :
        print "";
}