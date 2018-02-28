<?php
declare(strict_types=1);
$input = explode(" ", trim(fgets(STDIN)));

$checkNum = function (array $arr): bool {
    $arrFiltered = array_filter($arr,
        function ($num): bool {
            return is_numeric($num) && $num >= 0 && $num < 10;
        });
    return count($arrFiltered) == count($arr) && count($arr) <= 5;
};

$createMatrix = function (array $arr): array {
    $prevArr = $arr;
    $matrix = array();
    for ($i = 1; $i < count($arr) + 1; ++$i) {
        for ($j = 0; $j < count($arr); ++$j) {
            $matrix[] = pow($prevArr[$j], $i);
            $prevArr[$j] = $matrix[$j];
        }
    }
    return array_chunk($matrix, count($arr));
};

if ($checkNum($input) === true) {
    $matrix = $createMatrix($input);
    foreach ($matrix as $value) {
        echo implode(" ", $value);
        echo PHP_EOL;
    }
} else {
    echo "Invalid input";
}
