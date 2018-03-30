<?php


namespace VehicleApp;


use VehicleApp\VehicleModels\Abstractions\Vehicle;

class App
{

    private const CURRENT_VEHICLE_COUNT = 2;

    /**
     * @var Vehicle[]
     */
    private $vehicles = [];

    public function start(): void
    {
        $this->processInput();
        $this->initCommands();
        echo $this;
    }

    private function processInput(): void
    {
        $inputCount = self::CURRENT_VEHICLE_COUNT;

        while ($inputCount--) {
            $vehicleInput = explode(" ", trim(fgets(STDIN)));
            $vehicleType = array_shift($vehicleInput);
            $vehicleFullType = "\\VehicleApp\\VehicleModels\\" . $vehicleType;
            $vehicleInput = array_map("floatval", $vehicleInput);

            try {
                $this->vehicles[$vehicleType] = new $vehicleFullType(...
                  $vehicleInput);
            } catch (\Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }

    private function initCommands(): void
    {
        $cmdCount = (int)trim(fgets(STDIN));

        while ($cmdCount--) {
            $cmd = explode(" ", trim(fgets(STDIN)));
            $cmdToken = strtolower(array_shift($cmd));
            $cmdVehicleType = array_shift($cmd);
            $cmd = array_map("floatval", $cmd);

            try {
                $this->vehicles[$cmdVehicleType]->$cmdToken(...$cmd);
            } catch (\Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }

    public function __toString()
    {
        return implode(PHP_EOL, $this->vehicles);
    }
}