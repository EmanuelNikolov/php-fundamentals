<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface AirConditioned
{
    public function getACStatus(): bool;
}