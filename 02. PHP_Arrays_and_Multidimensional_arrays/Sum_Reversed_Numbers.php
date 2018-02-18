<?php
$numbers = explode(" ", trim(fgets(STDIN)));

foreach ($numbers as $number) {
    $reversed[] = strrev($number);
}

echo array_sum($reversed);