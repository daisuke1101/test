<?php

$to = 'daisuke.hokut.sayama.381@gmail.com';    //宛先
$subject = 'テストメール';  // 件名
$body = "テスト mb_send_mail \nテスト"; //本文
$headers = "From : d.morita@lifearcsystem.co.jp\n";
$headers .= "Cc : daisuke.8take.nagasaka@docomo.ne.jp\n";
$headers .= "X-Mailer : PHP 5.3.1\n";

if (mb_send_mail($to, $subject, $body, $headers)) {
    print '成功';
} else {
    print '失敗';
}
