<?php

class Number
{
    private $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function lastDigit(): int
    {
        return (int)substr($this->number, -1);
    }

    public function digitInWords(): string
    {
        $format = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        return $format->format($this->lastDigit());
    }
}