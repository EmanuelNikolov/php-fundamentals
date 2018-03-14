<?php
namespace PizzaModels;

use PizzaModels\Ingredients\Dough;
use PizzaModels\Ingredients\Topping;

class Pizza
{
    const BASE_CPG = 2;

    private const MAX_TOPINGS = 10;

    private const MAX_SYMBOLS = 15;

    private $name;

    /**
     * @var Topping[]
     */
    private $toppings = [];

    /**
     * @var Dough
     */
    private $dough;

    private $totalCal;

    public function __construct(string $name, int $toppingsCount)
    {
        $this->setName($name);
        $this->checkToppingsCount($toppingsCount);
    }

    protected function checkToppingsCount(int $toppingsCount)
{
    if ($toppingsCount < 0 || $toppingsCount > self::MAX_TOPINGS) {
        throw new \Exception("Number of toppings should be in range [0..10].");
    }
}

    public function setDough(Dough $dough): void
    {
        $this->dough = $dough;
    }

    public function addTopping(Topping $topping): void
    {
        $this->toppings[] = $topping;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName($name): void
    {
        if (empty($name) || strlen($name) >= self::MAX_SYMBOLS) {
            throw new \Exception("Pizza name should be between 1 and 15 symbols.");
        }

        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name . " - " . number_format($this->totalCal, 2) . " Calories.";
    }

    public function calcTotalCal(): void
    {
        $toppingsCals = array_reduce($this->toppings, function ($i, Topping $obj) {
            return $i += $obj->getCPG();
        });

        $this->totalCal = $toppingsCals + $this->dough->getCPG();
    }
}