<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\ILeutenantGeneral;
use MilitaryModels\Interfaces\IPrivate;

class LeutenantGeneralC extends PrivateC implements ILeutenantGeneral
{

    /**
     * @var \MilitaryModels\Interfaces\IPrivate[]
     */
    private $privates = [];

    public function addPrivate(IPrivate $private): void
    {
        $this->privates[] = $private;
    }

    public function getPrivates(): array
    {
        return $this->privates;
    }

    public function __toString()
    {
        return parent::__toString() . PHP_EOL
          . "Private:" . PHP_EOL
          . implode(PHP_EOL, $this->getPrivates());
    }
}