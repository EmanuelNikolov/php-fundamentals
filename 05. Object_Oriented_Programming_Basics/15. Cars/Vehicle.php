<?php

class Vehicle
{
    private $speed;
    private $fuel;
    private $LPK;
    private $distance;
    private $timeTraveled = [];

    public function __construct(int $speed, int $fuel, float $LPK)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->LPK = $LPK;
    }

    public function travel(int $distance): void
    {
        $requiredFuel = ($this->LPK / 100) * $distance;
        $timeTraveled = 0;

        if ($requiredFuel <= $this->fuel) {
            $this->fuel -= $requiredFuel;
            $this->distance += $distance;
            $timeTraveled += ($distance * (60 / $this->speed));
        }

        $maxDistance = $this->fuel / ($this->LPK / 100);
        $this->distance += $maxDistance;
        $this->fuel = 0;
        $timeTraveled += ($maxDistance * (60 / $this->speed));

        $this->timeTraveled = [
            floor($timeTraveled / 60),
            floor($timeTraveled % 60)
        ];
    }


    public function refuel(int $fuel): void
    {
        $this->fuel += $fuel;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getFuel()
    {
        return number_format($this->fuel, 1);
    }

    public function getLPK(): float
    {
        return $this->LPK;
    }

    public function getDistance()
    {
        return number_format($this->distance, 1);
    }

    public function getTimeTraveled(): array
    {
        return $this->timeTraveled;
    }
}