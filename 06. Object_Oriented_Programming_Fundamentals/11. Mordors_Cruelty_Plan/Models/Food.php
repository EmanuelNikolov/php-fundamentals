<?php
namespace Models;

class Food
{
    private $name;
    private $points;

    public function __construct(string $name, int $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPoints(): int
    {
        return $this->points;
    }
}