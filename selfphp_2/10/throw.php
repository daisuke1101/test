<?php
class Calculation {

    public static function division ($x, $y) {
    // 引数が数値以外
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new Exception('引数が数値ではありません');
        }
    // 除数$yが0
        if ($y === 0) {
            throw new Exception('0での除算はできません');
        }

        return $x / $y;
    }
}

try {
    print Calculation::division(5, 0);
} catch (Exception $e) {
    print "ERROR：{$e->getMessage()}";
}