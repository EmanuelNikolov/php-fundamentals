<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface Refuelable
{

    public function setFuel(float $liters): void;

    public function getFuel(): float;

    public function setFuelConsumption(float $literPerKm): void;

    public function getFuelConsumption(): float;

    public function setTankCapacity(float $tankCapacity): void;

    public function getTankCapacity(): float;

    public function isTankFillable(float $liters): bool;

    public function refuel(float $liters);

    public function fuelNeeded(float $distance): float;
}