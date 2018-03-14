<?php
namespace PizzaModels;

class Mood
{
    private $state;

    public function __construct(int $happiness)
    {
        if ($happiness < -5) {
            $this->state = "Angry";
        } elseif ($happiness <= 0) {
            $this->state = "Sad";
        } elseif ($happiness < 15) {
            $this->state = "Happy";
        } else {
            $this->state = "PHP";
        }
    }

    public function getState(): string
    {
        return $this->state;
    }
}