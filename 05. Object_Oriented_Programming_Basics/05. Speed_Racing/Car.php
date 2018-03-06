<?php

class Car
{
    private static $lastId;

    private $id;
    private $model;
    private $fuelAmount;
    private $LPK;
    private $distance;

    public function __construct(string $model, float $fuelAmount, float $LPK)
    {
        $this->id = ++self::$lastId;
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->LPK = $LPK;
        $this->distance = 0;
    }

    public function driveCar(int $distance): void
    {
        if ($distance * $this->LPK > $this->fuelAmount) {
            throw new Exception("Insufficient fuel for the drive");
        }

        $this->fuelAmount -= $distance * $this->LPK;
        $this->distance += $distance;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getFuelAmount(): float
    {
        return $this->fuelAmount;
    }

    public function getLPK(): float
    {
        return $this->LPK;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

}