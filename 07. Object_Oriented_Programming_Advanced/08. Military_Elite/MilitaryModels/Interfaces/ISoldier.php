<?php

namespace MilitaryModels\Interfaces;


interface ISoldier
{

    public function getId(): string;

    public function getFirstName(): string;

    public function getLastName(): string;
}