<?php

class Avtoku6ta
{
    /**
     * @var Bri4ka[]
     */
    private $garage = [];

    /**
     * @var Mikser[]
     */
    private $engines = [];

    public function __construct()
    {
        $engineCount = (int)trim(fgets(STDIN));

        while ($engineCount > 0) {
            $engineData = explode(" ", trim(fgets(STDIN)));
            $this->engines[] = new Mikser(...$engineData);
            $engineCount--;
        }

        $carCount = (int)trim(fgets(STDIN));

        while ($carCount > 0) {
            $carData = explode(" ", trim(fgets(STDIN)));
            foreach ($this->engines as $engine) {
                if ($engine->getModel() == $carData[1]) {
                    $carData[1] = $engine;
                    $this->garage[] = new Bri4ka(...$carData);
                }
            }

            $carCount--;
        }
    }

    public function __toString()
    {
        $result = [];

        foreach ($this->garage as $car) {
            $result[] = "{$car->getModel()}:\r\n"
                . "\t{$car->getEngine()->getModel()}:\r\n"
                . "\t\tPower: {$car->getEngine()->getPower()}\r\n"
                . "\t\tDisplacement: {$car->getEngine()->getDisplacement()}\r\n"
                . "\t\tEfficiency: {$car->getEngine()->getEfficiency()}\r\n"
                . "\tWeight: {$car->getWeight()}\r\n"
                . "\tColor: {$car->getColor()}\r\n";
        }

        return implode("", $result);
    }


}