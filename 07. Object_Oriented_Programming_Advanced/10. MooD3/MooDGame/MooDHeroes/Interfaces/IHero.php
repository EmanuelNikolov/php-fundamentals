<?php


namespace MooDGame\MooDHeroes\Interfaces;


interface IHero
{

    public function setUsername(): void;

    public function getUsername(): string;

    public function setPassword(): void;

    public function getPassword(): string;

    public function setLevel(): void;

    public function getLevel(): int;

    public function setSPoints(): void;

    public function getSPoints(): float;

    public function setType(): void;

    public function getType(): string;
}