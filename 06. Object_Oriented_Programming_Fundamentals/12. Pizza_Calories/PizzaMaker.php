<?php

class PizzaMaker
{
    /**
     * @var \PizzaModels\Pizza
     */
    private $pizza;

    public function start()
    {
        $this->processInput();
        echo $this->pizza;
    }

    protected function processInput()
    {
        $pizzaInput = explode(" ", trim(fgets(STDIN)));

        try {
            $pizza = new \PizzaModels\Pizza($pizzaInput[1], (int)$pizzaInput[2]);

            $doughInput = explode(" ", trim(fgets(STDIN)));
            $dough = new \PizzaModels\Ingredients\Dough($doughInput[1], $doughInput[2], (int)$doughInput[3]);
            $pizza->setDough($dough);

            while (true) {
                $toppingsInput = trim(fgets(STDIN));

                if ($toppingsInput === "END") {
                    break;
                }

                $toppingsInput = explode(" ", $toppingsInput);
                $topping = new \PizzaModels\Ingredients\Topping($toppingsInput[1], $toppingsInput[2]);
                $pizza->addTopping($topping);
            }

            $pizza->calcTotalCal();

            $this->pizza = $pizza;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }
}