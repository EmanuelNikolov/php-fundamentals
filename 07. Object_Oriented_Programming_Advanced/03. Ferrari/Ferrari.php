<?php

namespace CvqtCherven;


class Ferrari implements Drivable
{

    private const FERRARI_MODEL = "488-Spider";

    private $driver;

    public function __construct(string $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function brake(): string
    {
        return "Brakes!";
    }

    public function gas(): string
    {
        return "Zadu6avam sA!";
    }

    public function __toString()
    {
        return self::FERRARI_MODEL . "/{$this->brake()}/{$this->gas()}/{$this->driver}";
    }
}