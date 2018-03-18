<?php

namespace chovek;


interface IPerson
{

    public function setName(string $name);

    public function setAge(int $age);

    public function getName(): string;

    public function getAge(): int;

    public function __toString();
}