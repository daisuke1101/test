<?php
require_once 'triangle.php';
require_once 'square.php';

    // IFigure実装クラスの配列
$figs = array();
$figs[] = new Triangle(10, 5);
$figs[] = new Square(10, 5);
$figs[] = new Triangle(3, 2);

    // 配列$figsの内容を逐次処理
foreach ($figs as $fig) {
    // IFigureインターフェイスを実装している場合のみgetArea
    if ($fig instanceof IFigure) {
        print '<p>' . get_class($fig) . '：' . $fig->getArea() . '</p>';
    }
}