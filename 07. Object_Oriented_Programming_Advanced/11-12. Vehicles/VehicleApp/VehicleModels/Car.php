<?php


namespace VehicleApp\VehicleModels;


use VehicleApp\VehicleModels\Abstractions\Vehicle;

class Car extends Vehicle
{

    protected const AC_MODIFIER = 0.9;

    public function drive(float $distance): void
    {
        parent::drive($distance);
    }

    public function refuel(float $liters)
    {
        if ($this->isTankFillable($liters)) {
            throw new \Exception("Cannot fit fuel in tank");
        }

        $this->setFuel($this->getFuel() + $liters);
    }
}