<?php

use Factories\FoodFactory;
use Models\Ganjdalf;

class WizardAnalyser
{
    /**
     * @var Ganjdalf
     */
    private $wizard;

    public function start()
    {
        $this->processInput();
        echo $this->wizard;
    }

    protected function processInput(): void
    {
        $input = strtolower(trim(fgets(STDIN)));
        $filterInput = preg_replace("~[^a-z,]~i", "", $input);
        $foods = explode(",", $filterInput);

        $wizard = new Ganjdalf();

        foreach ($foods as $food) {
            $food = FoodFactory::createFood($food);
            $wizard->eat($food);
        }

        $this->wizard = $wizard;
    }
}