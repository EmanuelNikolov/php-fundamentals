<?php


namespace VehicleApp\VehicleModels;


use VehicleApp\VehicleModels\Abstractions\IPCV;
use VehicleApp\VehicleModels\Abstractions\Vehicle;

class Bus extends Vehicle implements IPCV
{

    protected const AC_MODIFIER = 0.4;

    protected const AC_PCV_MODIFIER = 1.4;

    private $PCVStatus;

    public function drive(float $distance): void
    {
        $this->PCVStatus = true;
        parent::drive($distance);
    }

    public function driveEmpty(float $distance): void
    {
        $this->PCVStatus = false;
        parent::drive($distance);
    }

    public function refuel(float $liters)
    {
        if ($this->isTankFillable($liters)) {
            throw new \Exception("Cannot fit fuel in tank");
        }

        $this->setFuel($this->getFuel() + $liters);
    }

    public function getPCVStatus(): bool
    {
        return $this->PCVStatus;
    }

    public function fuelNeeded(float $distance): float
    {
        $fuelConsumption = $this->getFuelConsumption();

        if ($this->PCVStatus === true) {
            $fuelConsumption += self::AC_PCV_MODIFIER;
        }

        return $distance * $fuelConsumption;
    }
}