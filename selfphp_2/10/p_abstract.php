<?php
abstract class Animal {
    public abstract function outputVoice();
}

class Cat extends Animal {
    public final function outputVoice() {
        return 'ニャァ';
    }
}

class Dog extends Animal {
    public final function outputVoice() {
        return 'バゥ';
    }
}

$cat = new Cat();
print $cat->outputVoice() . '<br />';
$dog = new Dog();
print $dog->outputVoice() . '<br />';