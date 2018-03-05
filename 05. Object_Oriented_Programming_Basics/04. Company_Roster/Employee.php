<?php

class Employee
{
    const EMAIL_DEFAULT = "n/a";
    const AGE_DEFAULT = -1;

    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    public function __construct(string $name,
                                float $salary,
                                string $position,
                                string $department,
                                $email = self::EMAIL_DEFAULT,
                                int $age = self::AGE_DEFAULT)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        if (is_numeric($email)) {
            $this->age = $email;
            $this->email = self::EMAIL_DEFAULT;
        } else {
            $this->email = $email;
            $this->age = $age;
        }

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}