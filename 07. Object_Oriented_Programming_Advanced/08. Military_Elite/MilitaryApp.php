<?php

class MilitaryApp implements IMilitaryApp
{

    /**
     * @var \MilitaryModels\Interfaces\ISoldier[]
     */
    private $soldiers = [];

    public function start(): void
    {
        $this->processInput();
        echo implode(PHP_EOL, $this->soldiers);
    }

    /**
     * @return \MilitaryModels\Interfaces\ISoldier[]
     */
    public function getSoldiers(): array
    {
        return $this->soldiers;
    }

    public function processInput(): void
    {
        while (true) {
            $input = trim(fgets(STDIN));

            if ($input === "End") {
                break;
            }

            $input = explode(" ", $input);
            $title = "\\MilitaryModels\\" . array_shift($input) . "C";
            $inputUntouched = $input;
            $tokens1 = array_slice($input, 4);
            $tokens2 = array_slice($inputUntouched, 5);

            if (empty($tokens1)) {
                $this->soldiers[$input[0]] = new $title(...$input);
            } elseif ($title === "\\MilitaryModels\\LeutenantGeneralC") {
                $soldier = new $title(...$input);

                foreach ($tokens1 as $token) {
                    if (array_key_exists($token, $this->getSoldiers())) {
                        $soldier->addPrivate($this->getSoldiers()[$token]);
                    }
                }

                $this->soldiers[$input[0]] = $soldier;
            } else {
                
                $this->soldiers[$input[0]] = new $title($inputUntouched[0], $inputUntouched[1],
                  $inputUntouched[2], (float)$inputUntouched[3], $inputUntouched[4], $tokens2);
            }
        }
    }
}