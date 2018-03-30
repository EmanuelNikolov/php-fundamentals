<?php


namespace VehicleApp\VehicleModels;


use VehicleApp\VehicleModels\Abstractions\Vehicle;

class Truck extends Vehicle
{

    protected const AC_MODIFIER = 1.6;

    protected const FUEL_MODIFIER = 0.95;

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
        $this->setFuel($this->getFuel() + ($liters * self::FUEL_MODIFIER));
    }
}