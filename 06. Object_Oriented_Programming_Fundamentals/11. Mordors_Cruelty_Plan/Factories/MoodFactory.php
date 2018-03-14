<?php
namespace Factories;

use Models\Mood;

class MoodFactory
{
    public static function createMood(int $happiness): Mood
    {
        return new Mood($happiness);
    }
}