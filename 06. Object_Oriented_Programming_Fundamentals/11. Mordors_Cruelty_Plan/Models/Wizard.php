<?php

namespace PizzaModels;

use Factories\MoodFactory;

class Wizard
{

    /**
     * @var Mood
     */
    private $mood;

    private $happiness = 0;

    public function eat(Food $food): void
    {
        $this->happiness += $food->getPoints();
        $this->mood = MoodFactory::createMood($this->happiness);
    }

    public function __toString()
    {
        return $this->happiness . PHP_EOL . $this->mood->getState();
    }
}