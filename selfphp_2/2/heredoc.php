<?php
    $str = 'PHP';
    $msg = <<<EOD

{$str} は、サーバサイドで動作するスクリプト言語で、
Perlがベースとなっております？<br />
EOD;

// ヒアドキュメント前には、空白を置いてはならない

    print $msg;
?>