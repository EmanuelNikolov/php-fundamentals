<?php
declare(strict_types=1);
$input = explode(" ", trim(fgets(STDIN)));
function diffCount(array $input): int
{
    $result = 0;
    $countInput = count($input);
    for ($i = 0; $i < $countInput; ++$i) {
        for ($n = 1; $n < $countInput; ++$n) {
            if ($input[$i] - $input[$n] == 8) {
                $result++;
            }
        }
    }
    return $result;
}

echo diffCount($input);