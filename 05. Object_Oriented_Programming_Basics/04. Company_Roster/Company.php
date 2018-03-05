<?php

class Company
{
    /**
     * @var Employee[]
     */
    private $employees = [];
    private $bestPaidDep;

    /**
     * @var Employee[]
     */
    private $bestPaidInDep = [];

    public function __construct()
    {
        $countEmployees = trim(fgets(STDIN));

        while ($countEmployees > 0) {
            $employeeInfo = explode(" ", trim(fgets(STDIN)));
            $employee = new Employee(...$employeeInfo);
            $this->employees[] = $employee;
            $countEmployees--;
        }

        $departments = [];

        foreach ($this->employees as $employee) {
            if (!array_key_exists($employee->getDepartment(), $departments)) {
                $departments[$employee->getDepartment()] = 1;
            }
            $departments[$employee->getDepartment()]++;
        }

        $averageSalaries = [];

        foreach ($departments as $department => $count) {
            $averageSalary = 0;
            foreach ($this->employees as $employee) {
                if ($employee->getDepartment() == $department) {
                    $averageSalary += $employee->getSalary();
                }
            }
            $averageSalaries[$department] = $averageSalary / $count;
        }

        $this->bestPaidDep = array_search(max($averageSalaries), $averageSalaries);

        foreach ($this->employees as $employee) {
            if ($employee->getDepartment() == $this->getBestPaidDep()) {
                $this->bestPaidInDep[] = $employee;
            }
        }

        usort($this->bestPaidInDep, function ($employee1, $employee2) {
            return $employee2->getSalary() <=> $employee1->getSalary();
        });
    }

    public function getBestPaidDep()
    {
        return $this->bestPaidDep;
    }

    public function getBestPaidInDep()
    {
        return $this->bestPaidInDep;
    }
}