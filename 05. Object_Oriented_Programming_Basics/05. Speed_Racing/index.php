<?php
declare(strict_types=1);

require_once "Car.php";
require_once "TestDrive.php";

$testDrive = new TestDrive();

foreach ($testDrive->getTestedCars() as $car) {
    echo $car->getModel() . " "
        . number_format($car->getFuelAmount(), 2) . " "
        . $car->getDistance() . PHP_EOL;
}