<?php


namespace FarmEntities\FarmAnimals\Mammals;


use FarmEntities\FarmAnimals\Abstractions\MammalAbs;

class Zebra extends MammalAbs
{

    protected const SOUND = "Zs";

    protected const FOOD_PREF = [
      "Vegetable",
    ];
}