<?php


namespace MooDGame\MooDHeroes\Interfaces;


interface IHero
{

    public function setUsername(string $name): void;

    public function getUsername(): string;

    public function setPassword(): void;

    public function getPassword(): string;

    public function setLevel(int $level): void;

    public function getLevel(): int;

    public function setSPoints($sPoints): void;

    public function getSPoints();

    public function setType(string $type): void;

    public function getType(): string;

    public function calculation(): string;
}