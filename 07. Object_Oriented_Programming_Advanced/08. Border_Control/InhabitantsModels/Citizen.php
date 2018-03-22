<?php

namespace InhabitantsModels;


class Citizen extends InhabitantAbstract implements Birthable
{

    private $age;

    private $birthDate;

    public function __construct(
      string $name,
      string $age,
      string $id,
      string $birthDate
    ) {
        parent::__construct($name, $id);
        $this->age = $age;
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
}