<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface Drivable
{

    public function drive(float $distance): void;

    public function setDistanceTravelled(float $distance): void;

    public function getDistanceTravelled(): float;
}