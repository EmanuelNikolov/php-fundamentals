<?php

namespace InhabitantsModels;


abstract class InhabitantAbstract implements Identifiable
{

    private $id;

    private $name;

    public function __construct(string $name, string $id)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}