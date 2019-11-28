<?php
class Figure {
    // プロパティ(変数)設定
    protected $width = 1;
    protected $height = 1;
    // コンストラクタ(プロパティ初期化)
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}