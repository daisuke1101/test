<?php
function replaceContents($path) {
    $data = file_get_contents($path);
    for ($i = 1; $i < func_num_args(); $i++) {
        $data = str_replace('{'. ($i - 1) . '}', func_get_arg($i), $data);
    }
    return $data;
}

print replaceContents('data.dat', '小野邦夫', '2019年10月1日');