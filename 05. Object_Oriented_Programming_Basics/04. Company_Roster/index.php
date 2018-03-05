<?php
declare(strict_types=1);

require_once "Employee.php";
require_once "Company.php";

$company = new Company();

echo "Highest Average Salary: {$company->getBestPaidDep()}" . PHP_EOL;

foreach ($company->getBestPaidInDep() as $employee) {
    echo "{$employee->getName()} "
        . round($employee->getSalary(), 2)
        . " {$employee->getEmail()} {$employee->getAge()}"
        . PHP_EOL;
}