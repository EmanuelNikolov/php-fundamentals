<?php

namespace InhabitantsModels;


class Pet implements Birthable
{

    private $name;

    private $birthDate;

    public function __construct(string $name, string $birthDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
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