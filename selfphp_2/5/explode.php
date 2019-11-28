<?php
$data = '千葉と群馬と愛知と埼玉';
print_r(explode('と', $data));
print_r(explode('や', $data));
print_r(explode('と', $data, 2));
print_r(explode('と', $data, -2));