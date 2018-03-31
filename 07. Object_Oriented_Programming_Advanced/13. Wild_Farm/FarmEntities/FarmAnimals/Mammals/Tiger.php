<?php


namespace FarmEntities\FarmAnimals\Mammals;


use FarmEntities\FarmAnimals\Abstractions\FelineAbs;

class Tiger extends FelineAbs
{

    protected const SOUND = "ROAAR!!!";

    protected const FOOD_PREF = [
      "Meat",
    ];
}