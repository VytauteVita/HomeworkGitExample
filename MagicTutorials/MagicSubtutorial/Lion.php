<?php
/**
 * Created by PhpStorm.
 * User: Vita
 * Date: 10/15/17
 * Time: 19:33
 */
require 'Animal.php';
class Lion extends Animal {

    public function __construct(){
        $this->color = 'golden';
        $this->size = 'medium';
        print "This animals is" .
    }
    public function __destruct() {
        print "Destroying " . $this->size . "\n";
    }
}
