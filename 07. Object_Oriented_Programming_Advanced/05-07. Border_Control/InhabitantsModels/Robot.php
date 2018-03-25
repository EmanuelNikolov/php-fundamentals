<?php

namespace InhabitantsModels;


class Robot extends InhabitantAbstract implements Identifiable
{

    private $id;

    public function __construct(string $name, string $id)
    {
        parent::__construct($name);
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}