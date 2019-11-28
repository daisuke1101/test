<?php
require_once 'figure.php';

class Triangle extends Figure { // Figureを継承したTriangle
    // 面積を求めるメソッド
    public function getArea() {
        return $this->width * $this->height / 2;
    }
}