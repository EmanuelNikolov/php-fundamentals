<?php

class FibonacciNum
{
    private $numRange = [];
    private $start;
    private $end;

    public function __construct()
    {
        $this->start = (int)trim(fgets(STDIN));
        $this->end = (int)trim(fgets(STDIN));
    }

    public function calcFibonacci(int $number): int
    {
        return round(((5 ** .5 + 1) / 2) ** $number / 5 ** .5);
    }

    public function findNumRange(): void
    {
        for ($i = $this->start; $i < $this->end; ++$i) {
            $this->numRange[] = $this->calcFibonacci($i);
        }
    }

    public function __toString()
    {
        return implode(", ", $this->numRange);
    }
}

$sequence = new FibonacciNum();

$sequence->findNumRange();
echo $sequence;