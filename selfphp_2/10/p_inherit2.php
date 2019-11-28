<?php
require_once 'p_inherit.php';

class MyClass2 extends MyClass {
    public function getData() {
        return'[' . parent::getData() . ']';

    }

    
}