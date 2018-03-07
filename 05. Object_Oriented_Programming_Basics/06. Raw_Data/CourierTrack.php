<?php

class CourierTrack
{
    /**
     * @var Automobile[]
     */
    private $garage = [];

    public function __construct()
    {
        $autoCount = trim(fgets(STDIN));

        while ($autoCount > 0) {
            $input = explode(" ", trim(fgets(STDIN)));

            $engine = new AutoEngine($input[1], $input[2]);
            $cargo = new AutoCargo($input[3], $input[4]);
            $tires = [];

            for ($i = 5; $i < count($input); $i += 2) {
                $tires[] = new AutoTire($input[$i], $input[$i + 1]);
            }

            $automobile = new Automobile($input[0], $engine, $cargo, $tires);
            $this->garage[] = $automobile;
            $autoCount--;
        }
    }

    public function trackStatus()
    {
        $command = trim(fgets(STDIN));
        $result = [];

        foreach ($this->garage as $car) {
            if ($car->checkAutomobile($command) === false) {
                $result[] = $car;
            }
        }

        $this->garage = $result;
    }

    public function __toString()
    {
        $result = [];

        foreach ($this->garage as $car) {
            $result[] = $car->getModel() . PHP_EOL;
        }

        return implode("", $result);
    }
}