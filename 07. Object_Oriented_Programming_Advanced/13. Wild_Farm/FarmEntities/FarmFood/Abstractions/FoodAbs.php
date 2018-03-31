<?php


namespace FarmEntities\FarmFood\Abstractions;


abstract class FoodAbs implements Eatable
{

    private $quantity = 0;

    public function __construct(int $quantity)
    {
        $this->setQuantity($quantity);
    }

    public function setQuantity(int $number): void
    {
        $this->quantity = $number;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}