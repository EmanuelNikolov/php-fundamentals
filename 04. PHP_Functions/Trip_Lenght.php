<?php
declare(strict_types=1);
$input = array_map("floatval", explode(", ", trim(fgets(STDIN))));
list($x1, $y1, $x2, $y2, $x3, $y3) = $input;

$distances = array(
    "1" => $distanceA = pythagorean($x1 - $x2, $y1 - $y2),
    "2" => $distanceB = pythagorean($x2 - $x3, $y2 - $y3),
    "3" => $distanceC = pythagorean($x1 - $x3, $y1 - $y3),
);
asort($distances);
$keys = array_map("intval", array_keys($distances));
if ($keys[2] >= $keys[0]) {
    $keys = array_reverse($keys);
}
if ($keys[1] >= $keys[2]) {
    $slice[] = array_pop($keys);
    array_splice($keys, 1, 0, $slice);
}
//TODO: wtf is dis
echo $keys[0] . "->" . $keys[1] . "->" . $keys[2] . ": " . array_sum(array_splice($distances, 0, 2));

function pythagorean(float $a, float $b): float
{
    return sqrt($a * $a + $b * $b);
}
