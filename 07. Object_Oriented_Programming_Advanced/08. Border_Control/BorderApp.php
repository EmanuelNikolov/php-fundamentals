<?php

use InhabitantsModels\Citizen;
use InhabitantsModels\Robot;

class BorderApp
{

    private const CITIZEN_PARAM_COUNT = 3;

    private $fakeId;

    /**
     * @var \InhabitantsModels\InhabitantAbstract[]
     */
    private $inhabitants = [];

    /**
     * @var \InhabitantsModels\InhabitantAbstract[]
     */
    private $criminals = [];

    public function start()
    {
        $this->processInput();
        $this->checkInhabitants();
        echo $this;
    }

    private function processInput()
    {
        while (true) {
            $input = trim(fgets(STDIN));

            if ($input === "End") {
                break;
            }

            $input = explode(" ", $input);

            if (count($input) === self::CITIZEN_PARAM_COUNT) {
                $this->inhabitants[] = new Citizen(...$input);
            } else {
                $this->inhabitants[] = new Robot(...$input);
            }
        }

        $this->fakeId = trim(fgets(STDIN));
    }

    private function checkInhabitants()
    {
        foreach ($this->inhabitants as $inhabitant) {
            if ($this->isValidId($inhabitant)) {
                $this->criminals[] = $inhabitant;
            }
        }
    }

    private function isValidId(\InhabitantsModels\Identifiable $inhabitant): bool
    {
        $id = $inhabitant->getId();

        if (strpos($id, $this->fakeId, -(strlen($this->fakeId)))) {
            return true;
        }

        return false;
    }

    public function __toString()
    {
        return implode(PHP_EOL, $this->criminals);
    }
}