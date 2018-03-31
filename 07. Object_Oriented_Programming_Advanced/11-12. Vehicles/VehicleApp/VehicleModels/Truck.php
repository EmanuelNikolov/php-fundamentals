<?php


namespace VehicleApp\VehicleModels;


use VehicleApp\VehicleModels\Abstractions\Vehicle;

class Truck extends Vehicle
{

    protected const AC_MODIFIER = 1.6;

    protected const FUEL_MODIFIER = 0.95;

    public function drive(float $distance): void
    {
        parent::drive($distance);
    }

    public function refuel(float $liters)
    {
        $this->setFuel($this->getFuel() + ($liters * self::FUEL_MODIFIER));
    }
}