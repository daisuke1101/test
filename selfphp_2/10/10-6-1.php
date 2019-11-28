<?php

class MyClass {
    public function __get($value) {
        print "{$value} プロパティは存在しません";
    }
}