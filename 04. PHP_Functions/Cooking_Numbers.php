<?php
declare(strict_types=1);

$number = floatval(trim(fgets(STDIN)));
$commands = explode(", ", trim(fgets(STDIN)));

for ($i = 0; $i < 5; ++$i) {
    if ($i == 0) {
        echo $result = funcCheck($commands[$i], $number);
        echo PHP_EOL;
    } else {
        echo $result = funcCheck($commands[$i], $result);
        echo PHP_EOL;
    }
}

function funcCheck(string $command, float $number): float {
    if ($command === "chop") {
        return $result = chopNum($number);
    } else {
        return $result = $command($number);
    }
}

function chopNum(float $number): float {
    return $number / 2;
}

function dice(float $number): float {
    return sqrt($number);
}

function spice(float $number): float {
    return ++$number;
}

function bake(float $number): float {
    return $number * 3;
}

function fillet(float $number): float {
    return $number - ($number * 0.2);
}