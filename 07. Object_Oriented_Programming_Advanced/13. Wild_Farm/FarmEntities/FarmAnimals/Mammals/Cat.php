<?php


namespace FarmEntities\FarmAnimals\Mammals;


use FarmEntities\FarmAnimals\Abstractions\Interfaces\ICat;
use FarmEntities\FarmAnimals\Abstractions\FelineAbs;

class Cat extends FelineAbs implements ICat
{

    protected const SOUND = "Meowwww";

    protected const FOOD_PREF = [
      "Meat",
      "Vegetable",
    ];

    private $breed;

    public function __construct(
      string $animalName,
      float $animalWeight,
      string $livingRegion,
      string $breed
    ) {
        parent::__construct($animalName, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }

    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    public function __toString()
    {
        return basename(get_class($this))
          . "["
          . "{$this->getAnimalName()},{$this->getBreed()},{$this->getAnimalWeight()},{$this->getLivingRegion()},{$this->getFoodEaten()}"
          . "]";
    }
}