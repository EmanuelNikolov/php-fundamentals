<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface Refuelable
{

    public function setFuel(float $liters): void;

    public function getFuel(): float;

    public function setFuelConsumption(float $literPerKm): void;

    public function getFuelConsumption(): float;

    public function refuel(float $liters);
}