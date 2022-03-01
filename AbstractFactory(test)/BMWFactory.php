<?php

require_once "CarsFactory.php";

class BMWFactory implements CarsFactory {

    public function createEngine(): BMWEngine
    {
        return new BMWEngine();
    }

    public function createGearbox(): BMWGearbox
    {
        return new BMWGearbox();
    }
}