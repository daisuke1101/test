<?php
require_once 'businessperson.php';

class HtrBusinessPerson extends BusinessPerson {

    public function work() {
        parent::work();
        print 'ただし、ぼちぼちと…。';
    }
}