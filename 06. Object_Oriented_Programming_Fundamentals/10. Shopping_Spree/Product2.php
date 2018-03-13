<?php

class Product2
{
    private $name;
    private $cost;

    public function __construct(string $name, int $cost)
    {
        $this->setName($name);
        $this->cost = $cost;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception("Name cannot be empty");
        }

        $this->name = $name;
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}