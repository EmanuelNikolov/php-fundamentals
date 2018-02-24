<?php
declare(strict_types=1);
function isInside(float $x, float $y, float $z): bool
{
    $X = 50;
    $Y = 80;
    $Z = 50;
    $X1 = 10;
    $Y1 = 20;
    $Z1 = 15;
    return $x <= $X && $x >= $X1 && $y <= $Y && $y >= $Y1 && $z <= $Z && $z >= $Z1;
}

$input = array_chunk(array_map("floatval", explode(", ", trim(fgets(STDIN)))), 3);

for ($i = 0; $i < count($input); ++$i) {
    if (isInside($input[$i][0], $input[$i][1], $input[$i][2]) === true) {
        echo "inside\r\n";
    } else {
        echo "outside\r\n";
    }
}