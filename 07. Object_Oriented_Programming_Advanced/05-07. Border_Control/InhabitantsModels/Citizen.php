<?php

namespace InhabitantsModels;


class Citizen extends InhabitantAbstract implements Identifiable, Birthable, Buyer
{

    private const FOOD_PACK = 10;

    private $food = 0;

    private $age;

    private $id;

    private $birthDate;

    public function __construct(
      string $name,
      string $age,
      string $id,
      string $birthDate
    ) {
        parent::__construct($name);
        $this->age = $age;
        $this->id = $id;
        $this->birthDate = $birthDate;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function getBirthDay(): string
    {
        return $this->birthDate;
    }

    public function __toString()
    {
        return $this->birthDate;
    }

    public function getId(): string
    {
        return $this->id;
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