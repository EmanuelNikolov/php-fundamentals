<?php

namespace PizzaModels\Ingredients;

use PizzaModels\Pizza;

class Topping
{
    private const TYPE = [
        'meat' => 1.2,
        'veggies' => 0.8,
        'cheese' => 1.1,
        'sauce' => 0.9
    ];

    private $type;

    private $weight;

    private $CPG;

    public function __construct(string $type, int $weight)
    {
        $this->setType($type);
        $this->setWeight($weight);
        $this->setCPG();
    }

    public function getType(): string
    {
        return $this->type;
    }

    protected function setType(string $type): void
    {
        $type = strtolower($type);

        if (!array_key_exists($type, self::TYPE)) {
            $type = ucfirst($type);
            throw new \Exception("Cannot place {$type} on top of your pizza.");
        }

        $this->type = $type;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    protected function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 150) {
            $typeName = ucfirst($this->type);
            throw new \Exception("{$typeName} weight should be in the range [1..50].");
        }

        $this->weight = $weight;
    }

    public function getCPG()
    {
        return $this->CPG;
    }

    protected function setCPG(): void
    {
        $this->CPG = (Pizza::BASE_CPG * $this->weight) * self::TYPE[$this->type];
    }
}