<?php

namespace MilitaryModels\Interfaces;


interface IEngineer
{

    public function addRepairs(array $repair): void;

    /**
     * @return \MilitaryModels\Interfaces\IRepair[]
     */
    public function getRepairs(): array;
}