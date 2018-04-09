<?php


class Student
{

    private $firstName;

    private $lastName;

    private $email;

    private $examScore;

    public function __construct(string $firstName, string $lastName, string $email, string $examScore)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setExamScore($examScore);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        if (!ctype_alpha($firstName)) {
            throw new Exception("Invalid First Name");
        }

        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        if (!ctype_alpha($lastName)) {
            throw new Exception("Invalid Last Name");
        }

        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid Email");
        }

        $this->email = $email;
    }

    public function getExamScore(): int
    {
        return $this->examScore;
    }

    public function setExamScore(string $examScore): void
    {
        $examScore = filter_var($examScore, FILTER_VALIDATE_INT);

        if ($examScore === false) {
            throw new Exception("Invalid Exam Score");
        }

        if ($examScore < 0) {
            throw new Exception("Exam Score cannot be negative");
        }

        $this->examScore = $examScore;
    }
}