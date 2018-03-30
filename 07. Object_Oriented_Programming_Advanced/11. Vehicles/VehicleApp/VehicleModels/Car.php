<?php


namespace VehicleApp\VehicleModels;


use VehicleApp\VehicleModels\Abstractions\Vehicle;

class Car extends Vehicle
{

    protected const AC_MODIFIER = 0.9;

    public function ACModifier(): void
    {
        if ($this->getAC() === true) {
            $this->setFuelConsumption(
              $this->getFuelConsumption() + self::AC_MODIFIER
            );
        }
    }

    public function refuel(float $liters)
    {
        $this->setFuel($this->getFuel() + $liters);
    }
}