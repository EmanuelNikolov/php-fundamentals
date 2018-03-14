<?php
namespace Factories;

use PizzaModels\Mood;

class MoodFactory
{
    public static function createMood(int $happiness): Mood
    {
        return new Mood($happiness);
    }
}