<?php

namespace MilitaryModels\Interfaces;


interface ISpecialisedSoldier
{

    public function setCorps(string $corps): void;

    public function getCorps(): string;
}