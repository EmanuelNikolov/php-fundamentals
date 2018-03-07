<?php

class Automobile
{
    private $model;

    /**
     * @var AutoEngine
     */
    private $engine;

    /**
     * @var AutoCargo
     */
    private $cargo;

    /**
     * @var AutoTire[]
     */
    private $tires = [];

    public function __construct(string $model, AutoEngine $engine, AutoCargo $cargo, array $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = $tires;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): AutoEngine
    {
        return $this->engine;
    }

    public function getCargo(): AutoCargo
    {
        return $this->cargo;
    }

    public function getTires(): array
    {
        return $this->tires;
    }

    public function checkAutomobile(string $command): bool
    {
        if ($command == "fragile") {
            foreach ($this->getTires() as $tire) {
                if ($tire->getTirePressure() < 1) {
                    $result[] = $tire;
                }
            }
        }

        if ($command == "flamable") {
            if ($this->getEngine()->getEnginePower() > 250) {
                $result[] = $this->getEngine();
            }
        }

        return empty($result);
    }
}