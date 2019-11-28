<?php
class MemberList implements IteratorAggregate {
    // ダミーのプロパティを定義
    public $version = '1.0.0';
    public $name = 'MemberList';
    // Personオブジェクトのリストを格納するためのprivate変数
    private $list = array();

    public function getIterator() {
        return new ArrayIterator($this->list);
    }

    public function add(Person $p) {
        $this->list[] = $p;
    } 

    public function __invoke($index) {
        return $this->list[$index];
    }

}