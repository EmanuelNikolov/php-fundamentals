<?php

namespace InhabitantsModels;


class Citizen extends InhabitantAbstract
{
    protected $age;

    public function __construct(string $name, string $age, string $id)
    {
        parent::__construct($name, $id);
        $this->age = $age;
    }

    public function getAge(): string
    {
        return $this->age;
    }


}