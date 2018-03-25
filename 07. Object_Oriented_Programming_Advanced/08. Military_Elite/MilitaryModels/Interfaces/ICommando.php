<?php

namespace MilitaryModels\Interfaces;


interface ICommando
{

    public function addMissions(array $mission): void;

    /**
     * @return \MilitaryModels\Interfaces\IMission[]
     */
    public function getMissions(): array;
}