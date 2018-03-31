<?php


namespace FarmEntities\FarmAnimals\Abstractions;


use FarmEntities\FarmAnimals\Abstractions\Interfaces\IAnimal;
use FarmEntities\FarmFood\Abstractions\Eatable;

abstract class AnimalAbs implements IAnimal
{

    private const SOUND = self::SOUND;

    private const FOOD_PREF = self::FOOD_PREF;

    private $animalName;

    private $animalWeight;

    private $foodEaten = 0;

    public function __construct(
      string $animalName,
      float $animalWeight
    ) {
        $this->setAnimalName($animalName);
        $this->setAnimalWeight($animalWeight);
    }

    public function setAnimalName(string $name): void
    {
        $this->animalName = $name;
    }

    public function getAnimalName(): string
    {
        return $this->animalName;
    }

    public function setAnimalWeight(float $weight): void
    {
        $this->animalWeight = $weight;
    }

    public function getAnimalWeight(): float
    {
        return $this->animalWeight;
    }

    public function setFoodEaten(int $foodCount): void
    {
        $this->foodEaten = $foodCount;
    }

    public function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    public function makeSound(): void
    {
        echo static::SOUND . PHP_EOL;
    }

    public function eat(Eatable $food): void
    {
        $foodClassName = basename(get_class($food));
        $animalClassName = basename(get_class($this));

        if (in_array($foodClassName, static::FOOD_PREF)) {
            $foodQuantity = $food->getQuantity();

            for ($i = $foodQuantity; $i > 0; --$i) {
                ++$this->foodEaten;
            }
        } else {
            throw new \Exception("{$animalClassName} are not eating that type of food!");
        }
    }
}