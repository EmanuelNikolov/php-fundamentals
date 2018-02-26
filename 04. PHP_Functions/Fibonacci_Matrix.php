<?php
declare(strict_types=1);

$input = array_map("intval", explode(" ", trim(fgets(STDIN))));

$result = function (array $row): array {
    $zeroRow = array_fill(0, count($row), $row[0]);
    if (count($row) > 2) {
        $lastTwo = array();
        foreach ($row as $num) {
            $lastTwo[] = $zeroRow[0] + $num;
        }
        $firstTwo = $lastTwo; // Second two rows for later merging
        $prevRow = $row;
        $columnSum = array();
        for ($l = 0; $l < count($row) - 3; ++$l) {
//            $columnSum = array();
            for ($i = 0; $i < count($row); ++$i) {
                $columnSum[] = $lastTwo[$i] + $prevRow[$i];
                $prevRow[$i] = $lastTwo[$i];
                $lastTwo[$i] = $columnSum[$i];
            }
        }
        return array_merge($zeroRow, $row, $firstTwo, $columnSum);
    }
    return array_merge($zeroRow, $row);
};

$endResult = array_chunk($result($input), count($input));

foreach ($endResult as $value) {
    echo implode(" ", $value);
    echo PHP_EOL;
}
