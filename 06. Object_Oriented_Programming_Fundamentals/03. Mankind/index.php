<?php
declare(strict_types=1);

require_once "Hooman.php";

$studentInput = explode(" ", trim(fgets(STDIN)));
$workerInput = explode(" ", trim(fgets(STDIN)));

try {
    $student = new Student1($studentInput[0], $studentInput[1], $studentInput[2]);
    $worker = new Worker1($workerInput[0], $workerInput[1], (float)$workerInput[2], (float)$workerInput[3]);
    echo $student . PHP_EOL;
    echo $worker;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}