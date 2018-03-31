<?php


namespace FarmEntities\FarmAnimals\Abstractions\Interfaces;


interface ICat
{

    public function setBreed(string $breed): void;

    public function getBreed(): string;
}