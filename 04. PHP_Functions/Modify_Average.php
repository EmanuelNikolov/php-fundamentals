<?php
declare(strict_types=1);
$input = array_map("intval", str_split(trim(fgets(STDIN))));

while (!isAverage($input)) {
    array_push($input, 9);
}

echo implode("", $input);

function isAverage(array $input): bool {
    return array_sum($input) / count($input) > 5;
}