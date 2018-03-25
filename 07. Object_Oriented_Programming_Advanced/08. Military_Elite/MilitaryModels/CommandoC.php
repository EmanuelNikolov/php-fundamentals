<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\ICommando;
use MilitaryModels\Interfaces\IMission;

class CommandoC extends SpecialisedSoldierAbstract implements ICommando
{

    /**
     * @var \MilitaryModels\Interfaces\IMission[]
     */
    private $missions = [];

    public function __construct(
      string $id,
      string $firstName,
      string $lastName,
      float $salary,
      string $corps,
      $missions = []
    ) {
        parent::__construct($id, $firstName, $lastName, $salary, $corps);
        $this->addMissions($missions);
    }

    public function getMissions(): array
    {
        return $this->missions;
    }

    public function addMissions(array $mission): void
    {
        for ($i = 0; $i < count($mission); $i += 2) {
            $this->missions[] = new MissionC($mission[$i], $mission[$i+1]);
        }
    }

    public function __toString()
    {
        return parent::__toString() . PHP_EOL
          . "Corps: {$this->getCorps()}" . PHP_EOL
          . "Missions: " . PHP_EOL
          . implode(PHP_EOL, $this->getMissions());
    }
}