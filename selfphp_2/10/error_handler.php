<?php
    // エラーハンドラ登録
set_error_handler (
    function ($errno, $errstr, $file, $line, $context) {
        throw new ErrorException($errstr, 0, $errno, $file, $line);
    }
);

try {
    // 引数不足でエラーを返す
    mb_convert_encoding();
} catch (ErrorException $e) {
    print "ERROR：{$e->getMessage()}";
}
