<?php

namespace MilitaryModels;


use MilitaryModels\Interfaces\IMission;

class MissionC implements IMission
{

    private const VALUES_AVAILABLE = ["inProgress", "Finished"];

    private $codeName;

    private $state;

    public function __construct(string $codeName, string $state)
    {
        $this->codeName = $codeName;
        $this->setState($state);
    }

    public function getCodeName(): string
    {
        return $this->codeName;
    }

    public function setState(string $state): void
    {
        /*if (!in_array($state, self::VALUES_AVAILABLE)) {
            exit;
        }*/

        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function completeMission(): void
    {
        $this->state = "Finished";
    }

    public function __toString()
    {
        return "\tCode Name: {$this->getCodeName()} State: {$this->getState()}";
    }
}