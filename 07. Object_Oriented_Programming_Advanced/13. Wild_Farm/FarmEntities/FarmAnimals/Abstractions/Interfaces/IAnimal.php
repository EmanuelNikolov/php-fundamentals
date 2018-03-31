<?php


namespace FarmEntities\FarmAnimals\Abstractions\Interfaces;


use FarmEntities\FarmFood\Abstractions\Eatable;

interface IAnimal
{

    public function setAnimalName(string $name): void;

    public function getAnimalName(): string;

    public function setAnimalWeight(float $weight): void;

    public function getAnimalWeight(): float;

    public function setFoodEaten(int $foodCount): void;

    public function getFoodEaten(): int;

    public function makeSound(): void;

    public function eat(Eatable $food): void;
}