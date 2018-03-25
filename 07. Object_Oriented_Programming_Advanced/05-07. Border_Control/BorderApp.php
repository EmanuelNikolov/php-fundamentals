<?php

use InhabitantsModels\Citizen;
use InhabitantsModels\Rebel;
use InhabitantsModels\Robot;

class BorderApp
{

    private const CITIZEN_PARAM_COUNT = 4;

    private $comparisonOp;

    /**
     * @var \InhabitantsModels\Buyer[]
     */
    private $inhabitants = [];

    private $criminals = [];

    private $totalFood = 0;

    public function start()
    {
        $this->processInput();
        //        $this->checkInhabitants();
        $this->sumFood();
        echo $this;
    }

    private function processInput()
    {
        $countInhabitants = (int)trim(fgets(STDIN));

        while ($countInhabitants--) {
            $input = trim(fgets(STDIN));
            $input = explode(" ", $input);

            if (count($input) === self::CITIZEN_PARAM_COUNT) {
                $this->inhabitants[$input[0]] = new Citizen(...$input);
            } else {
                $this->inhabitants[$input[0]] = new Rebel(...$input);
            }
        }

        while (true) {
            $input = trim(fgets(STDIN));

            if ($input === "End") {
                break;
            }

            if (array_key_exists($input, $this->inhabitants)) {
                $this->inhabitants[$input]->BuyFood();
            }
        }
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

    private function sumFood(): void
    {
        foreach ($this->inhabitants as $inhabitant) {
            $this->totalFood += $inhabitant->getFood();
        }
    }

    private function isValidId(string $id): bool
    {
        if (strpos($id, $this->comparisonOp, -(strlen($this->comparisonOp)))) {
            return true;
        }

        return false;
    }

    public function __toString()
    {
        return (string)$this->totalFood;
    }
}