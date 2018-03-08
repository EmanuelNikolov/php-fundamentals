<?php

class Battle
{
    /**
     * @var Trainer[]
     */
    private $trainers = [];

    public function __construct()
    {
        while (true) {
            $startInput = explode(" ", trim(fgets(STDIN)));

            if ($startInput[0] == "Tournament") {
                break;
            }

            $trainer = null;
            if (!$this->trainerExists($startInput[0])) {
                $trainer = new Trainer($startInput[0]);
                $this->addTrainer($trainer);
            } else {
                $trainer = $this->getTrainerByName($startInput[0]);
            }

            $trainer->addBot($startInput[1], $startInput[2], (int)$startInput[3]);
        }
    }

    public function tournament(): void
    {
        while (true) {
            $gameInput = trim(fgets(STDIN));

            if ($gameInput == "End") {
                break;
            }

            foreach ($this->trainers as $trainer) {
                $trainer->checkBots($gameInput);
            }
        }

        usort($this->trainers, function ($obj1, $obj2) {
            $compare = $obj2->getNumBadges() <=> $obj1->getNumBadges();
            if ($compare == 0) {
                return $obj1->getId() <=> $obj2->getId();
            }
            return $compare;
        });
    }

    public function __toString()
    {
        $result = [];

        foreach ($this->trainers as $trainer) {
            $result[] = "{$trainer->getName()} {$trainer->getNumBadges()} {$trainer->countBots()}\r\n";
        }

        return implode("", $result);
    }

    private function trainerExists(string $name): bool
    {
        return array_key_exists($name, $this->trainers);
    }

    private function addTrainer(Trainer $trainer)
    {
        $this->trainers[$trainer->getName()] = $trainer;
    }

    private function getTrainerByName(string $name): Trainer
    {
        return $this->trainers[$name];
    }
}