<?php

class DecimalNumber
{
    private $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function reverseNumber(): string
    {
        return strrev($this->number);
    }
}