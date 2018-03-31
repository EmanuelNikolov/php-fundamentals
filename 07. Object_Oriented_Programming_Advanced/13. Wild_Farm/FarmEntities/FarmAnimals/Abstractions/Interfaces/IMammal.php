<?php


namespace FarmEntities\FarmAnimals\Abstractions\Interfaces;


interface IMammal
{

    public function setLivingRegion(string $region): void;

    public function getLivingRegion(): string;
}