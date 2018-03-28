<?php


namespace MooDGame;


use MooDGame\MooDHeroes\Interfaces\IHero;

class Game
{

    private $player;

    public function start(): void
    {
        $this->processInput();
        echo $this->player;
    }

    private function processInput(): void
    {
        $input = explode(" | ", trim(fgets(STDIN)));
        $token = "\\MooDGame\\MooDHeroes\\" . $input[1];

        $refClass = new \ReflectionClass($token);
        $constructor = $refClass->getConstructor();
        $constructorParams = $constructor->getParameters();
        $sPointsParamType = $constructorParams[2]->getType()->getName() . "val";
        $input[2] = $sPointsParamType($input[2]);


        $this->player = new $token(...$input);
    }
}