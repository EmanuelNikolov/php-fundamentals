<?php


namespace VehicleApp\VehicleModels\Abstractions;


interface IPCV
{
    public function getPCVStatus(): bool;

    public function driveEmpty(float $distance): void;
}