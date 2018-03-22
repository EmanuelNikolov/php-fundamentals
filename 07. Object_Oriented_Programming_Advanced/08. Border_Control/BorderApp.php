<?php

use InhabitantsModels\Citizen;
use InhabitantsModels\Robot;

class BorderApp
{

    private const CITIZEN_PARAM_COUNT = 4;

    private const PET_PARAM_COUNT = 3;

    private $fakeId;

    /**
     * @var \InhabitantsModels\InhabitantAbstract[]
     * @var \InhabitantsModels\Birthable[]
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
            $token = array_shift($input);
            $token = '\\InhabitantsModels\\' . $token;

            $this->inhabitants[] = new $token(...$input);
        }

        $this->fakeId = trim(fgets(STDIN));
    }

    private function checkInhabitants()
    {
        foreach ($this->inhabitants as $inhabitant) {
            if (!$inhabitant instanceof Robot) {
                if ($this->isValidId($inhabitant->getBirthDay())) {
                    $this->criminals[] = $inhabitant;
                }
            }
        }
    }

    private function isValidId(string $id): bool
    {
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