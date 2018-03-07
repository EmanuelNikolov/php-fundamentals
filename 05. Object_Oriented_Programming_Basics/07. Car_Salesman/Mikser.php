<?php

class Mikser
{
    const DEFAULT_EMPTY_VALUE = "n/a";

    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct(
                                string $model,
                                int $power,
                                $displacement = self::DEFAULT_EMPTY_VALUE,
                                string $efficiency = self::DEFAULT_EMPTY_VALUE
    ) {
        $this->model = $model;
        $this->power = $power;

        if (!is_numeric($displacement) && $displacement != self::DEFAULT_EMPTY_VALUE) {
            $this->efficiency = $displacement;
            $this->displacement = self::DEFAULT_EMPTY_VALUE;
        } else {
            $this->displacement = $displacement;
            $this->efficiency = $efficiency;
        }
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function getEfficiency(): string
    {
        return $this->efficiency;
    }
}