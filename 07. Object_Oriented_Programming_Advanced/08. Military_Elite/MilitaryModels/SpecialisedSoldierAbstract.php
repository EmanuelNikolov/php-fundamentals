<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\ISpecialisedSoldier;

abstract class SpecialisedSoldierAbstract extends PrivateC implements ISpecialisedSoldier
{

    private $corps;

    public function __construct(
      string $id,
      string $firstName,
      string $lastName,
      float $salary,
      string $corps
    ) {
        parent::__construct($id, $firstName, $lastName, $salary);
        $this->setCorps($corps);
    }

    public function setCorps(string $corps): void
    {
        $this->corps = $corps;
    }

    public function getCorps(): string
    {
        return $this->corps;
    }
}