<?php

namespace MilitaryModels;


class SpyC extends SoldierAbstract implements ISpy
{

    private $codeNum;

    public function __construct(
      string $id,
      string $firstName,
      string $lastName,
      string $codeNum
    ) {
        parent::__construct($id, $firstName, $lastName);
        $this->codeNum = $codeNum;
    }

    public function getCodeNum(): string
    {
        return $this->codeNum;
    }

    public function __toString()
    {
        return parent::__toString() . PHP_EOL . "Code Number: {$this->getCodeNum()}";
    }
}