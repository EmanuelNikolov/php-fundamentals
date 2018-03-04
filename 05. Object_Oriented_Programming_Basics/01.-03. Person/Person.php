<?php

class Person
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

/*$name = readline();
$age = readline();

$people = [
    $person1 = new Person($name, $age)
];

foreach ($people as $person) {
    echo "Name: {$person->getName()} Age: {$person->getAge()}" . PHP_EOL;
}*/