<?php

require_once "BMWFactory.php";
require_once "AudiFactory.php";
require_once "BMW.php";
require_once "Audi.php";

$factory = new BMWFactory;

$icEngineBMW = $factory->createEngine();
$electricalEngineBMW = $factory->createGearbox();

echo $icEngineBMW->getEngine() . "<br>";
echo $electricalEngineBMW->getGearbox();

echo "<br>";

$factory2 = new AudiFactory;

$icEngineAudi = $factory2->createEngine();
$electricalEngineAudi = $factory2->createGearbox();

echo $icEngineAudi->getEngine() . "<br>";
echo $electricalEngineAudi->getGearbox();

// http://localhost:8080/spaceLab/AbstractFactory/index.php