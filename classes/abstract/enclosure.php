<?php
abstract class enclosure {

    private $location; //top left corner [x,y]
    private $dimensions; // [height, width]
    private $waterTrough; // [x,y]
    private $gate; // [open/closed,x,y]
    private $food; // [amount left, capacity]
    private $water; // [amount left, capacity]

    public function feed() {}
    public function drink() {}
    public function refillFood() {}
    public function refillWater() {}
}