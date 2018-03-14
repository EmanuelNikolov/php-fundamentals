<?php

use Factories\FoodFactory;
use PizzaModels\Wizard;

class WizardAnalyser
{
    /**
     * @var Wizard
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

        $wizard = new Wizard();

        foreach ($foods as $food) {
            $food = FoodFactory::createFood($food);
            $wizard->eat($food);
        }

        $this->wizard = $wizard;
    }
}