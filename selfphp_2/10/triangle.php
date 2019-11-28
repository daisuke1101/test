<?php
require_once 'ifigure.php';

class Triangle implements IFigure {
    // プロパティを定義
    private $width;
    private $height;
    // コンストラクタでプロパティを初期化
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // IFigure::getAreaメソッド
    public function getArea() {
        return $this->width * $this->height / 2;
    }
}