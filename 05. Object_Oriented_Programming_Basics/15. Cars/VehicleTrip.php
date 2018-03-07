<?php

class VehicleTrip
{
    /**
     * @var Vehicle
     */
    private $tripInfo;

    public function __construct()
    {
        while (true) {
            $commands = explode(" ", trim(fgets(STDIN)));

            if ($commands[0] == "END") {
                break;
            }

            if (is_numeric($commands[0])) {
                $vehicle = new Vehicle(...$commands);
            }

            if ($commands[0] == "Travel") {
                $vehicle->travel($commands[1]);

                $this->tripInfo = $vehicle;
            }
        }
    }

    public function __toString()
    {
        $timeTravelled = $this->tripInfo->getTimeTraveled();
        return "Total Distance: {$this->tripInfo->getDistance()}\nTotal Time: {$timeTravelled[0]} hours and {$timeTravelled[1]} minutes\nFuel left: {$this->tripInfo->getFuel()}";
    }
}
