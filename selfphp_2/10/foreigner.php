<?php
require_once 'person.php';

class Foreigner extends Person {

    public $middleName;

    public function __construct($firstName, $middleName, $lastName) {
        parent::__construct($firstName, $lastName);

        $this->middleName = $middleName;
    }

    public function show() {
        print "私は、{$this->lastName}{$this->middleName}{$this->firstName}です。";
    }

}