<?php

class Bot
{
    private $name;
    private $element;
    private $hp;

    public function __construct(string $name, string $element, int $hp)
    {
        $this->name = $name;
        $this->element = $element;
        $this->hp = $hp;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getElement(): string
    {
        return $this->element;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function takeHp(int $hp): void
    {
        $this->hp -= $hp;
    }
}