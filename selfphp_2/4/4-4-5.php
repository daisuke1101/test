<?php
$language = 'PHP';

if ($language == 'PHP' || $language == 'JSP' || $language == 'ASP') {
    print "サーバサイド";    
} elseif ($language == 'JavaScript' || $language == 'VBScript') {
    print "クライアントサイド";
} else {
    print "";
}