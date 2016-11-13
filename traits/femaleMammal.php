<?php
trait femaleMammal {

    private $pregnant; //boolean
    private $mothering; // [boolean, birthDate/timesince birth]  correct term?
    private $milking; // boolean

    public function giveBirth() {}
    public function milk() {} //optional parameter name of calf or calves if feeding young

}