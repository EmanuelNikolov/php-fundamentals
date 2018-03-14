<?php
namespace Factories;

use PizzaModels\Food;

class FoodFactory
{
    private static $foodData = [
        'cram' => 2,
        'lembas' => 3,
        'apple' => 1,
        'melon' => 1,
        'honeycake' => 5,
        'mushrooms' => -10
    ];

    public static function createFood(string $name): Food
    {
        $name = strtolower($name);

        if (!array_key_exists($name, self::$foodData)) {
            return new Food($name, -1);
        }

        return new Food($name, self::$foodData[$name]);
    }
}