<?php
declare(strict_types=1);
function isInside(float $x, float  $y, float $z): bool {
    $X = 50; $Y = 80; $Z = 50;
    return $x <= $X && $y <= $Y && $z <= $Z;
}
if (isInside(2, 3, 4) === true) {
    echo "inside";
} else {
    echo "outside";
}