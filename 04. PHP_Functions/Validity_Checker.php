<?php
declare(strict_types=1);
$input = array_map("floatval", explode(", ", trim(fgets(STDIN))));

echo isValid($input[0], $input[1], 0, 0);
echo isValid($input[2], $input[3], 0, 0);
echo isValid($input[0], $input[1], $input[2], $input[3]);

function isValid(float $x1, float $y1, float $x2, float $y2): string
{
    $check = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
    if ((int)$check == $check) {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid\n";
    } else {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid\n";
    }
}