<?php


namespace MooDGame\MooDHeroes;


use MooDGame\MooDHeroes\Abstractions\HeroAbstract;

class Bad extends HeroAbstract
{

    public function __construct(
      string $username,
      string $type,
      int $sPoints,
      int $level
    ) {
        parent::__construct($username, $type, $level);
        $this->setSPoints($sPoints);
    }

    public function setPassword(): void
    {
        $password = (string)(strlen($this->getUsername()) * 217);

        $this->password = (string)$password;
    }

    public function setSPoints($sPoints): void
    {
        if (!is_int($sPoints)) {
            throw new \Exception("Special Points of class Bad must be a float");
        }

        $this->sPoints = $sPoints;
    }

    public function getSPoints(): float
    {
        return $this->sPoints;
    }

    public function calculation(): string
    {
        $result = $this->sPoints * $this->level;

        return number_format($result, 1, ".", "");
    }

    public function __toString()
    {
        return parent::__toString() . $this->calculation();
    }
}