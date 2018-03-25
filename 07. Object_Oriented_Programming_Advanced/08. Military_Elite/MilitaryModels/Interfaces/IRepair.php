<?php

namespace MilitaryModels\Interfaces;


interface IRepair
{

    public function getPartName(): string;

    public function getHoursWorked(): string ;
}