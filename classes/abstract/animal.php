<?php
abstract class animal {

    abstract protected function setNoise();

    private $name;
    private $number;
    private $gender;
    private $age; //infant or mature
    private $position; // ["enclosure", x, y, z]
    private $velocity;
    private $stance; //standing or resting
    private $stomach; // [amount of food, capacity]
    private $bladder; //[amount of water, capacity]
    private $neutered; //boolean
    private $variety;
    protected $noise;

    public function makeNoise() {

        echo $this->noise;
    }
    public function eat() {}
    public function drink() {}
    public function walk() {}
    public function urinate() {}
    public function defecate() {}
    public function copulate() {}
    public function rest() {}
    public function stand() {}

}

