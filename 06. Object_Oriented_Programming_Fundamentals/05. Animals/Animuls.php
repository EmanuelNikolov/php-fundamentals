<?php

abstract class Animuls
{
    const SOUND = "Not implemented!";

    private $name;
    private $age;
    private $gender;

    public function __construct(string $name, int $age, string $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    protected function setAge(int $age): void
    {
        if ($age <= 0) {
            throw new Exception("Invalid input");
        }

        $this->age = $age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    protected function setGender(string $gender): void
    {
        if (strtolower($gender) != ("male" || "female")){
            throw new Exception("Invalid input");
        }

        $this->gender = $gender;
    }

    public function __toString()
    {
        return get_class($this) . " {$this->getName()} {$this->getAge()} {$this->getGender()}" . PHP_EOL
            . $this->produceSound();
    }

    public function produceSound(): string
    {
        return static::SOUND;
    }
}

class Doggo extends Animuls
{
    const SOUND = "BauBau";
}

class Froggo extends Animuls
{
    const SOUND = "Frogggg";
}

class Koti extends Animuls
{
    const SOUND = "MiauMiau";
}

class Kitten extends Koti
{
    const GENDER = "female";
    const SOUND = "Miau";

    protected function setGender(string $gender): void
    {
        if (strtolower($gender) != self::GENDER) {
            throw new Exception("Invalid input!");
        }

        parent::setGender($gender);
    }
}

class Tommocat extends Koti
{
    const GENDER = "male";
    const SOUND = "Give me one million b***h";

    protected function setGender(string $gender): void
    {
        if (strtolower($gender) != self::GENDER) {
            throw new Exception("Invalid input!");
        }

        parent::setGender($gender);
    }
}