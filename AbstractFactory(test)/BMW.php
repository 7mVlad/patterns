<?php

require_once "interface.php";


class BMWEngine implements Engine {

    public function getEngine(): string
    {
        return "Двигатель BMW";
    }

}

class BMWGearbox implements Gearbox {

    public function getGearbox(): string
    {
        return "Коробка передач BMW";
    }
}