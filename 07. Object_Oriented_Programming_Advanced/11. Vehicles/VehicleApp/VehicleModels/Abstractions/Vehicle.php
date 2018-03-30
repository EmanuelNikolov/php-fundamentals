<?php


namespace VehicleApp\VehicleModels\Abstractions;


abstract class Vehicle implements Drivable, Refuelable, AirConditioned
{

    protected const CURRENT_AC_STATE = true;

    private $fuel = 0.;

    private $fuelConsumption;

    private $distanceTravelled = 0;

    private $currentAC;

    public function __construct(
      float $fuel,
      float $fuelConsumption
    ) {
        $this->setFuel($fuel);
        $this->setFuelConsumption($fuelConsumption);
        $this->setAC(self::CURRENT_AC_STATE);
        $this->ACModifier();
    }

    public function drive(float $distance)
    {
        $litersNeeded = $distance * $this->getFuelConsumption();

        if ($litersNeeded > $this->getFuel()) {
            $class = basename(get_class($this));
            throw new \Exception("{$class} needs refueling");
        }

        $this->setFuel($this->getFuel() - $litersNeeded);

        $this->setDistanceTravelled(
          $this->getDistanceTravelled() + $distance
        );

        $class = basename(get_class($this));

        echo "{$class} travelled {$distance} km" . PHP_EOL;
    }

    public function setDistanceTravelled(float $distance): void
    {
        $this->distanceTravelled = $distance;
    }

    public function getDistanceTravelled(): float
    {
        return $this->distanceTravelled;
    }

    public function setFuel(float $liters): void
    {
        $this->fuel = $liters;
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function setFuelConsumption(float $literPerKm): void
    {
        $this->fuelConsumption = $literPerKm;
    }

    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    public function setAC(bool $bool): void
    {
        $this->currentAC = $bool;
    }

    public function getAC(): bool
    {
        return $this->currentAC;
    }

    public function __toString()
    {
        $fuel = number_format($this->getFuel(), 2);

        return basename(get_class($this)) . ": {$fuel}";
    }
}