<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\ISoldier;

abstract class SoldierAbstract implements ISoldier
{

    private $id;

    private $firstName;

    private $lastName;

    public function __construct(string $id, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = "\t" . $firstName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function __toString()
    {
        return "Name: {$this->getFirstName()} {$this->getLastName()} Id: {$this->getId()}";
    }
}