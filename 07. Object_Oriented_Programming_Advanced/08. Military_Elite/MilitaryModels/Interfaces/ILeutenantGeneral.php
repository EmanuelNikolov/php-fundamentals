<?php

namespace MilitaryModels\Interfaces;


interface ILeutenantGeneral
{

    public function addPrivate(IPrivate $private): void;

    /**
     * @return \MilitaryModels\Interfaces\IPrivate[]
     */
    public function getPrivates(): array;
}