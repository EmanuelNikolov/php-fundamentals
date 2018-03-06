<?php

class TestDrive
{
    /**
     * @var Car[]
     */
    private $cars = [];

    /**
     * @var Car[]
     */
    private $testedCars = [];

    public function __construct()
    {
        $countCars = trim(fgets(STDIN));

        while ($countCars > 0) {
            $carSpecs = explode(" ", trim(fgets(STDIN)));
            $car = new Car(...$carSpecs);
            $this->cars[] = $car;
            $countCars--;
        }

        while (true) {
            $driveSpecs = explode(" ", trim(fgets(STDIN)));

            if ($driveSpecs[0] == "End") {
                break;
            }

            foreach ($this->cars as $car) {
                try {
                    if ($car->getModel() == $driveSpecs[1]) {
                        $car->driveCar($driveSpecs[2]);
                        $this->testedCars[$car->getId()] = $car;
                    }
                } catch (Exception $e) {
                    echo $e->getMessage() . PHP_EOL;
                }
            }
        }

        $this->testedCars = array_merge(
            array_udiff($this->cars, $this->testedCars, function ($obj1, $obj2) {
                return $obj1 <=> $obj2;
            }), $this->testedCars);

        usort($this->testedCars, function ($car1, $car2) {
            return strncmp($car1->getModel(), $car2->getModel(), 1);
        });
    }

    /**
     * @return Car[]
     */
    public function getTestedCars(): array
    {
        return $this->testedCars;
    }
}