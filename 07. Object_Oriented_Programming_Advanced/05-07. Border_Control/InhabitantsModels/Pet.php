<?php

namespace InhabitantsModels;


class Pet extends InhabitantAbstract implements Birthable
{

    private $birthDate;

    public function __construct(string $name, string $birthDate)
    {
        parent::__construct($name);
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