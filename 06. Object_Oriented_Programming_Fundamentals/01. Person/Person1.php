<?php

class Person1
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): void
    {
        if (strlen($name) <= 3) {
            throw new Exception("Name’s length should not be less than 3 symbols!");
        }

        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    protected function setAge(int $age): void
    {
        if ((int)$age < 1) {
            throw new Exception("Age must be positive!");
        }

        $this->age = $age;
    }
}

class Child1 extends Person1
{
    protected function setAge(int $age): void
    {
        if ((int)$age >= 15) {
            throw new Exception("Child’s age must be less than 16!");
        }

        parent::setAge($age);
    }
}

try {
    $child = new Child1("Pesho", 1);
    $person = new Person1("Gosho", 18);
} catch (Exception $e) {
    echo $e->getMessage();
}

