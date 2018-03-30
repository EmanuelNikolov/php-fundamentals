<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface AirConditioned
{

    public function setAC(bool $bool): void;

    public function getAC(): bool;

    public function ACModifier(): void;
}