<?php


namespace FarmEntities\FarmAnimals\Abstractions;


use FarmEntities\FarmAnimals\Abstractions\Interfaces\IMammal;

abstract class MammalAbs extends AnimalAbs implements IMammal
{

    private $livingRegion;

    public function __construct(
      string $animalName,
      float $animalWeight,
      string $livingRegion
    ) {
        parent::__construct($animalName, $animalWeight);
        $this->setLivingRegion($livingRegion);
    }

    public function setLivingRegion(string $region): void
    {
        $this->livingRegion = $region;
    }

    public function getLivingRegion(): string
    {
        return $this->livingRegion;
    }

    public function __toString()
    {
        return basename(get_class($this))
          . "["
          . "{$this->getAnimalName()},{$this->getAnimalWeight()},{$this->getLivingRegion()},{$this->getFoodEaten()}"
          . "]";
    }
}