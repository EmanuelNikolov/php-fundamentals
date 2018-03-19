<?php

use InhabitantsModels\Citizen;
use InhabitantsModels\Robot;

class BorderApp
{

    private const CITIZEN_COUNT_PARAM = 3;

    private $fakeId;

    /**
     * @var \InhabitantsModels\Citizen[]
     */
    private $citizens = [];

    /**
     * @var \InhabitantsModels\Robot[]
     */
    private $robots = [];

    private function processInput()
    {
        while (true) {
            $input = trim(fgets(STDIN));

            if ($input === "End") {
                break;
            }

            $input = explode(" ", $input);

            if (count($input) === self::CITIZEN_COUNT_PARAM) {
                $this->citizens[] = new Citizen(...$input);
            } else {
                $this->robots[] = new Robot(...$input);
            }
        }

        $this->fakeId = trim(fgets(STDIN));
    }

    private function checkId(string $id): bool
    {
        
    }
}