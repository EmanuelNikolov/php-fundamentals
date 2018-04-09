<?php


class StudentSorter
{

    /**
     * @var Student[]
     */
    private $students = [];

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function calcAverageScore(): int
    {
        $allScores = 0;

        foreach ($this->students as $student) {
            $allScores += $student->getExamScore();
        }

        $averageScore = $allScores / count($this->students);

        return $averageScore;
    }

    public function ascending(): void
    {
        null;
    }

    public function descending(): void
    {
        $this->students = array_reverse($this->students);
    }

    public function firstName(): void
    {
        usort($this->students, function ($obj1, $obj2) {
            return strncmp($obj1->getFirstName(), $obj2->getFirstName(), 1);
        });
    }

    public function lastName(): void
    {
        usort($this->students, function ($obj1, $obj2) {
            return strncmp($obj1->getLastName(), $obj2->getLastName(), 1);
        });
    }

    public function email(): void
    {
        usort($this->students, function ($obj1, $obj2) {
            return strncmp($obj1->getEmail(), $obj2->getEmail(), 1);
        });
    }

    public function examScore(): void
    {
        usort($this->students, function ($obj1, $obj2) {
            return $obj1->getExamScore() <=> $obj2->getExamScore();
        });
    }
}