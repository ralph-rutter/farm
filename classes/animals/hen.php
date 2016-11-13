<?php
class hen extends chicken {

    use femaleBird;

    public function __construct() {
        $this->setNoise();
    }

}