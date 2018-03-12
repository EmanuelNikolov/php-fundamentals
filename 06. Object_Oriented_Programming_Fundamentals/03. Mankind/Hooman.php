<?php

abstract class Hooman
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    protected function setFirstName(string $firstName): void
    {
        if (!$this->isCapital($firstName)) {
            throw new Exception("Expected upper case letter!Argument: firstName");
        }

        if (strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }

        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    protected function setLastName(string $lastName): void
    {
        if (!$this->isCapital($lastName)) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }

        if (strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName ");
        }

        $this->lastName = $lastName;
    }

    protected function isCapital(string $word): bool
    {
        return preg_match("~[A-Z]~", $word);
    }

    public function __toString()
    {
        return "First name: {$this->getFirstName()}" . PHP_EOL
            . "Last Name: {$this->getLastName()}" . PHP_EOL;
    }
}

class Student1 extends Hooman
{
    private $facultyNum;

    public function __construct(string $firstName, string $lastName, string $facultyNum)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNum($facultyNum);
    }

    public function getFacultyNum(): string
    {
        return $this->facultyNum;
    }

    protected function setFacultyNum(string $facultyNum): void
    {
        if (!preg_match("~^[\d]{5,10}$~", $facultyNum)) {
            throw new Exception("Invalid faculty number!");
        }

        $this->facultyNum = $facultyNum;
    }

    public function __toString()
    {
        return parent::__toString()
            . "Faculty Number: {$this->getFacultyNum()}" . PHP_EOL;
    }
}

class Worker1 extends Hooman
{
    private $weekSalary;
    private $hoursPerDay;
    private $salaryPerHour;

    public function __construct(string $firstName, string $lastName, float $weekSalary, float $hoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setHoursPerDay($hoursPerDay);
        $this->setSalaryPerHour();
    }

    public function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    protected function setSalaryPerHour(): void
    {
        $salaryPerHour = ($this->weekSalary / 7) / $this->hoursPerDay;
        $this->salaryPerHour = $salaryPerHour;
    }

    protected function setLastName(string $lastName): void
    {
        if (strlen($lastName) < 4) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }

        parent::setLastName($lastName);
    }

    protected function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary <= 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }

        $this->weekSalary = $weekSalary;
    }

    public function getHoursPerDay(): float
    {
        return $this->hoursPerDay;
    }

    public function getSalaryPerHour(): float
    {
        return $this->salaryPerHour;
    }

    protected function setHoursPerDay(float $hoursPerDay): void
    {
        if ($hoursPerDay < 1 || $hoursPerDay > 12) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }

        $this->hoursPerDay = $hoursPerDay;
    }

    public function __toString()
    {
        return parent::__toString()
            . "Week Salary: " . number_format($this->getWeekSalary(), 2, ".", "") . PHP_EOL
            . "Hours per day: " . number_format($this->getHoursPerDay(), 2) . PHP_EOL
            . "Salary per hour: " . number_format($this->getSalaryPerHour(), 2) . PHP_EOL;
    }
}