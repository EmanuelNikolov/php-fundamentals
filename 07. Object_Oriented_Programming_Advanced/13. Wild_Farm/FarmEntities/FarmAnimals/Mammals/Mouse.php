<?php


namespace FarmEntities\FarmAnimals\Mammals;


use FarmEntities\FarmAnimals\Abstractions\MammalAbs;

class Mouse extends MammalAbs
{

    protected const SOUND = "SQUEEEAAAK!";

    protected const FOOD_PREF = ["Vegetable"];
}