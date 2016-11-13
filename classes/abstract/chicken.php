<?php
abstract class chicken extends animal {

    protected function setNoise() {
        $this->noise = 'cluck';
    }

    public function fly() {}
}