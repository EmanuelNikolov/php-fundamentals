<?php

class AutoTire
{
    private $tirePressure;
    private $tireAge;

    public function __construct(float $tirePressure, int $tireAge)
    {
        $this->tirePressure = $tirePressure;
        $this->tireAge = $tireAge;
    }

    public function getTirePressure(): float
    {
        return $this->tirePressure;
    }

    public function getTireAge(): int
    {
        return $this->tireAge;
    }
}