<?php
    // 自作の例外クラスを定義
    class NumberFormatException extends Exception{ }
    class ZeroDivisionException extends Exception{ }

    class Calculation{
        // 内部で例外を生成するdivision
        public static function division ($x, $y) {
        // 引数が数値以外
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new NumberFormatException ('引数が数値ではありません');
        }
            // 除数$yが0
        if ($y === 0) {
            throw new ZeroDivisionException ('0での除算はできません');
        }

        return $x / $y;
    }
}

try {
    print Calculation::division(5, 0);
} catch (NumberFormatException $e) {
    print "WARNING：{$e->getMessage()}";
} catch (ZeroDivisionException $e) {
    print "ERROR：{$e->getMessage()}";
}