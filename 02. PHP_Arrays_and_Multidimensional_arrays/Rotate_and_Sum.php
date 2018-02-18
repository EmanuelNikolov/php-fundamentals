<?php
$numbers = explode(" ", trim(fgets(STDIN)));
$countRotations = trim(fgets(STDIN));
$countNumbers = count($numbers);

for ($r = 0; $r < $countRotations; ++$r) {
    array_unshift($numbers, end($numbers));
    array_pop($numbers);
    $rotations[] = $numbers;
}
if ($countRotations > 0) {
    $sum = array();
    for ($i = 0; $i < $countNumbers; ++$i) {
        $sum[] = array_sum(array_column($rotations, $i));
    }
    echo $result = implode(" ", $sum);
//print_r($sum);
} else {
//    print_r($rotations);
    echo $result = implode(" ", $rotations);
}