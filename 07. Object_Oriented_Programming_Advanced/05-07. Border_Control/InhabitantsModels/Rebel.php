<?php

namespace InhabitantsModels;


class Rebel extends InhabitantAbstract implements Buyer
{

    private const FOOD_PACK = 5;

    private $food = 0;

    private $age;

    private $group;

    public function __construct(string $name, string $age, string $group)
    {
        parent::__construct($name);
        $this->age = $age;
        $this->group = $group;
    }


    public function BuyFood(): void
    {
        $this->food += self::FOOD_PACK;
    }

    public function getFood(): int
    {
        return $this->food;
    }
}