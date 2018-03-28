<?php


namespace MooDGame\MooDHeroes;


use MooDGame\MooDHeroes\Abstractions\HeroAbstract;

class Good extends HeroAbstract
{

    public function __construct(
      string $username,
      string $type,
      float $sPoints,
      int $level
    ) {
        parent::__construct($username, $type, $level);
        $this->setSPoints($sPoints);
    }

    public function setPassword(): void
    {
        $username = $this->getUsername();
        $password = strrev($username) . (string)(strlen($username) * 21);

        $this->password = (string)$password;
    }

    public function setSPoints($sPoints): void
    {
        if (!is_float($sPoints)) {
            throw new \Exception("Special Points of class Good must be an integer");
        }

        $this->sPoints = $sPoints;
    }

    public function __toString()
    {
        return parent::__toString() . $this->calculation();
    }

    public function getSPoints(): int
    {
        return $this->sPoints;
    }

    public function calculation(): string
    {
        $result = $this->sPoints * $this->level;

        return number_format($result, 0, ' ', " ");
    }
}