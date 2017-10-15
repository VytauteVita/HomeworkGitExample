<?php

/**
 * Created by PhpStorm.
 * User: Vita
 * Date: 10/15/17
 * Time: 18:40
 */

class Animal {
    public $alive = true;
    public $color = '';
    public $size = '';
    public $name = 'Do';
    public $nickname = 'Plum';


    public function __call($name, $nickname)
    {
        print "The animal is called '$name' "
            . implode('or ', $nickname). "\n";
    }

    public static function __callStatic($name, $nickname)
    {
        print "The animal is called '$name' "
            . implode('or ', $nickname). "\n";
    }

    public function __clone() {
        $this->name .= '++';
    }

    public function __toString($alive)
    {
        return $alive->alive;
    }
}


