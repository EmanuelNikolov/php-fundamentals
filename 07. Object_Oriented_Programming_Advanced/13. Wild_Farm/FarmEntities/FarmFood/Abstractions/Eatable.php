<?php


namespace FarmEntities\FarmFood\Abstractions;


interface Eatable
{

    public function setQuantity(int $number): void;

    public function getQuantity(): int;
}