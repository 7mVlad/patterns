<?php

require_once "interface.php";

class AudiEngine implements Engine {

    public function getEngine(): string
    {
        return "Двигатель Audi";
    }

}

class AudiGearbox implements Gearbox {

    public function getGearbox(): string
    {
        return "Коробка передач Audi";
    }
}