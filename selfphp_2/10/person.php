<?php
class Person {
    public $firstName = '祥寛';
    public $lastName = '山田';

    public function __construct ($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        print '<p>' . __CLASS__ . 'オブジェクトが破棄されました。</p>';
    }

    public function __toString() {
        return $this->lastName . $this->firstName;
    }

    public function show() {
        print "私は、{$this->lastName}{$this->firstName}です。";
    }
}