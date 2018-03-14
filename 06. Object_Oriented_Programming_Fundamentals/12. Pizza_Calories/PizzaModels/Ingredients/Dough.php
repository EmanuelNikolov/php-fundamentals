<?php

namespace PizzaModels\Ingredients;

use PizzaModels\Pizza;

class Dough
{
    private const FLOUR_TYPE = [
        'white' => 1.5,
        'wholegrain' => 1.0
    ];

    private const BAKE_TECH = [
        'crispy' => 0.9,
        'chewy' => 1.1,
        'homemade' => 1.0
    ];

    private $flourType;

    private $bakeTech;

    private $weight;

    private $CPG;

    public function __construct(string $flourType, string $bakeTech, int $weight)
    {
        $this->setFlourType($flourType);
        $this->setBakeTech($bakeTech);
        $this->setWeight($weight);
        $this->setCPG();
    }

    public function getFlourType(): string
    {
        return $this->flourType;
    }

    protected function setFlourType($flourType): void
    {
        $flourType = strtolower($flourType);

        if (!array_key_exists($flourType, self::FLOUR_TYPE)) {
            throw new \Exception("Invalid type of dough.");
        }

        $this->flourType = $flourType;
    }

    public function getBakeTech(): string
    {
        return $this->bakeTech;
    }

    protected function setBakeTech($bakeTech): void
    {
        $this->bakeTech = strtolower($bakeTech);
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    protected function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 200) {
            throw new \Exception("Dough weight should be in the range [1..200].");
        }

        $this->weight = $weight;
    }

    public function getCPG(): float
    {
        return $this->CPG;
    }

    protected function setCPG(): void
    {
        $this->CPG = (Pizza::BASE_CPG * $this->weight)
            * self::FLOUR_TYPE[$this->flourType] * self::BAKE_TECH[$this->bakeTech];
    }
}