<?php
$str = '〒114-0014 東京都北区田端1-9-3'

print preg_match('[0-9]{3}-[0-9]{4}', $str);
