<?php

class AutoCargo
{
    private $cargoWeight;
    private $cargoType;

    public function __construct(int $cargoWeight, string $cargoType)
    {
        $this->cargoWeight = $cargoWeight;
        $this->cargoType = $cargoType;
    }

    public function getCargoWeight(): int
    {
        return $this->cargoWeight;
    }

    public function getCargoType(): string
    {
        return $this->cargoType;
    }
}