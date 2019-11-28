<?php
require_once 'businessperson.php';

class HyperBusinessPerson extends BusinessPerson {
    public function work() {
        print "<p>{$this->lastName}{$this->firstName}は、恐ろしい勢いで働いています！</p>";
    }
}