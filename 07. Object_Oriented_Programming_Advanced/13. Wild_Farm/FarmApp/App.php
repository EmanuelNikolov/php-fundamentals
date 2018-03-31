<?php


namespace FarmApp;


use FarmEntities\FarmAnimals\Abstractions\Interfaces\IAnimal;
use FarmEntities\FarmFood\Abstractions\Eatable;

class App
{

    /**
     * @var IAnimal
     */
    private $animal;

    /**
     * @var Eatable
     */
    private $food;

    public function start(): void
    {
        $this->processInput();

        try {
            $this->animal->makeSound();
            $this->animal->eat($this->food);
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

        echo $this->animal;
    }

    private function processInput(): void
    {
        while (true) {
            $animalInput = trim(fgets(STDIN));

            if ($animalInput === "End") {
                break;
            }

            $animalInput = explode(" ", $animalInput);
            $foodInput = explode(" ", trim(fgets(STDIN)));

            $animalClass = array_shift($animalInput);
            $animalFullClass = "\\FarmEntities\\FarmAnimals\\Mammals\\" . $animalClass;
            $animalInput[1] = (float)$animalInput[1];

            $this->animal = new $animalFullClass(...$animalInput);

            $foodClass = array_shift($foodInput);
            $foodFullClass = "\\FarmEntities\\FarmFood\\" . $foodClass;
            $foodInput = array_map("intval", $foodInput);

            $this->food = new $foodFullClass(...$foodInput);
        }
    }
}