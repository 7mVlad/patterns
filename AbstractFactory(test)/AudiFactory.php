<?php

require_once "CarsFactory.php";

class AudiFactory implements CarsFactory {

    public function createEngine(): AudiEngine
    {
        return new AudiEngine();
    }

    public function createGearbox(): AudiGearbox
    {
        return new AudiGearbox();
    }
}