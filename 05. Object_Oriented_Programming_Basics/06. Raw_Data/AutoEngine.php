<?php

class AutoEngine
{
    private $engineSpeed;
    private $enginePower;

    public function __construct(int $engineSpeed, int $enginePower)
    {
        $this->engineSpeed = $engineSpeed;
        $this->enginePower = $enginePower;
    }

    public function getEngineSpeed(): int
    {
        return $this->engineSpeed;
    }

    public function getEnginePower(): int
    {
        return $this->enginePower;
    }
}