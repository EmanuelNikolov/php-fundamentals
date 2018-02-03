<?php
$operation = $argv[1];
$first_number = (int)readline("Input First Number: ");
$second_number = (int)readline("Input Second Number: ");

switch ($operation) {
    case "sum":
        echo '= ' . ($first_number + $second_number) . "\n";
        break;
    case "sub":
        echo '= ' . ($first_number - $second_number) . "\n";
        break;
    case "multiply":
        echo '= ' . ($first_number * $second_number) . "\n";
        break;
    case "divide":
        echo '= ' . ($first_number / $second_number) . "\n";
        break;
    default:
        echo "Invalid input";
}