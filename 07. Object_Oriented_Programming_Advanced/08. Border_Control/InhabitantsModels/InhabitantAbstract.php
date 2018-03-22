<?php

namespace InhabitantsModels;


abstract class InhabitantAbstract
{

    private $name;

    public function __construct(string $name, string $id)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->id;
    }
}