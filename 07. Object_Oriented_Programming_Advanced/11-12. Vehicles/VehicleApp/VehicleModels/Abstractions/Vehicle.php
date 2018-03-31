<?php


namespace VehicleApp\VehicleModels\Abstractions;


abstract class Vehicle implements Drivable, Refuelable, AirConditioned
{

    protected const AC_MODIFIER = self::AC_MODIFIER;

    private $fuel = 0.;

    private $fuelConsumption;

    private $tankCapacity;

    private $distanceTravelled = 0;

    private $ACStatus;

    public function __construct(
      float $fuel,
      float $fuelConsumption,
      float $tankCapacity
    ) {
        $this->setFuel($fuel);
        $this->setFuelConsumption($fuelConsumption);
        $this->setTankCapacity($tankCapacity);
    }

    public function drive(float $distance): void
    {
        $this->ACStatus = true;

        $litersNeeded = $this->fuelNeeded($distance);

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
        if ($liters <= 0) {
            throw new \Exception("Fuel must be a positive number");
        }

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

    public function setTankCapacity(float $tankCapacity): void
    {
        $this->tankCapacity = $tankCapacity;
    }

    public function getTankCapacity(): float
    {
        return $this->tankCapacity;
    }

    public function getACStatus(): bool
    {
        return $this->ACStatus;
    }

    public function isTankFillable(float $liters): bool
    {
        return $this->getFuel() + $liters > $this->tankCapacity;
    }

    public function fuelNeeded(float $distance): float
    {
        $fuelConsumption = $this->getFuelConsumption();

        if ($this->ACStatus === true) {
            $fuelConsumption += static::AC_MODIFIER;
        }

        return $distance * $fuelConsumption;
    }

    public function __toString()
    {
        $fuel = number_format($this->getFuel(), 2, ".", "");

        return basename(get_class($this)) . ": {$fuel}";
    }
}