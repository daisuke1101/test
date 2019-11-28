<?php
class TriangleFigure {
    // base,heightプロパティ
    private $base;
    private $height;

    // コンストラクタ
    public function __construct() {
        $this->base = 1;
        $this->height = 1;
    }

    // baseプロパティのGETメソッド
    public function getBase() {
        return $this->base;
    }

    // baseプロパティのSETメソッド
    public function setBase($base) {
        if(is_numeric($base) && $base > 0) {
            $this->base = $base;
        }
    }

    // heightプロパティのGETメソッド
    public function getHeight() {
        return $this->height;
    }

    // heightプロパティのSETメソッド
    public function setHeight($height) {
        if(is_numeric($height) && $height > 0) {
            $this->height = $height;
        }
    }

    // プロパティを基に面積を算出
    public function getArea() {
        return $this->base * $this->height / 2;
    }
}