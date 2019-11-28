<?php
class Area {
    const PI = 3.14159265359;
    
    public static function circle($radius) {
        return pow($radius , 2) * self::PI;
    }
}