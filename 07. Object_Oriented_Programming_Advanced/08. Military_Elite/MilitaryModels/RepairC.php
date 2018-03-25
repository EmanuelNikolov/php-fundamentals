<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\IRepair;

class RepairC implements IRepair
{

    private $partName;

    private $hoursWorked;

    public function __construct(string $partName, string $hoursWorked)
    {
        $this->partName = $partName;
        $this->hoursWorked = $hoursWorked;
    }

    public function getPartName(): string
    {
        return $this->partName;
    }

    public function getHoursWorked(): string
    {
        return $this->hoursWorked;
    }

    public function __toString()
    {
        return "\tPart Name: {$this->getPartName()} Hours Worked: {$this->getHoursWorked()}";
    }
}