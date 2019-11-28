<?php
class Book {
    // フィールド値を設定・取得するためのプロパティ
    public $isbn;
    public $title;
    public $price;
    public $publish;
    public $published;
    private $_rate;     // 割引率

    // インスタンス化時に割引率セット
    public function __construct($rate) {
        $this->_rate = $rate;
    }

    // 割引後の価格を取得するdiscount
    public function discount() {
        return floor($this->price * (1 - $this->_rate));
    }
}