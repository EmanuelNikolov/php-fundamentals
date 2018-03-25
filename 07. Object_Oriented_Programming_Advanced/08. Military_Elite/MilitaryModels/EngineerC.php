<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\IEngineer;
use MilitaryModels\Interfaces\IRepair;

class EngineerC extends SpecialisedSoldierAbstract implements IEngineer
{

    /**
     * @var \MilitaryModels\Interfaces\IRepair[]
     */
    private $repairs = [];

    public function __construct(
      string $id,
      string $firstName,
      string $lastName,
      float $salary,
      string $corps,
      $repairs = []
    ) {
        parent::__construct($id, $firstName, $lastName, $salary, $corps);
        $this->addRepairs($repairs);
    }

    public function getRepairs(): array
    {
        return $this->repairs;
    }

    public function addRepairs(array $repair): void
    {
        for ($i = 0; $i < count($repair) - 1; $i += 2) {
            $this->repairs[] = new RepairC($repair[$i], $repair[$i+1]);
        }
    }

    public function __toString()
    {
        return parent::__toString() . PHP_EOL
          . "Corps: {$this->getCorps()}" . PHP_EOL
          . "Repairs:" . PHP_EOL
          . implode(PHP_EOL, $this->getRepairs());
    }
}