<?php
class MyClass {
    // それぞれのアクセス権限でプロパティを設定
    public $pub = 'public';
    protected $pro = 'protected';
    private $pri = 'private';
    // プロパティをリスト表示する
    public function showProperty() {
        foreach ($this as $key => $value) {
            print "{$key}：{$value} <br />";
        }
    }
}