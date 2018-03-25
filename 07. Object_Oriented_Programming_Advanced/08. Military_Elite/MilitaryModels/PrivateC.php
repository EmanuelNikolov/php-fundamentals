<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\IPrivate;

class PrivateC extends SoldierAbstract implements IPrivate
{

    private $salary;

    public function __construct(
      string $id,
      string $firstName,
      string $lastName,
      string $salary
    ) {
        parent::__construct($id, $firstName, $lastName);
        $this->salary = $salary;

    }

    public function getSalary(): string
    {
        return $this->salary;
    }

    public function __toString()
    {
        $salary = number_format($this->getSalary(), 2);
        return parent::__toString() . " Salary: {$salary}";
    }
}