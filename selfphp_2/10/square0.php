<?php
require_once 'figure.php';

class Square extends Figure {   // Figureを継承したSquare
    // 面積を求めるメソッド
    public function getArea() {
        return $this->width * $this->height ;
    }
}