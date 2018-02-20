<?php
$array1 = explode(" ", trim(fgets(STDIN)));
$array2 = explode(" ", trim(fgets(STDIN)));
$array1Reverse = array_reverse($array1);
$array2Reverse = array_reverse($array2);
$count = min(count($array1), count($array2));
$result = 0;
$resultReverse = 0;

for ($i = 0; $i < $count; ++$i) {
    if ($array1[$i] == $array2[$i]) {
        $result++;
    } else {
        break;
    }
}

for ($i = 0; $i < $count; ++$i) {
    if ($array1Reverse[$i] == $array2Reverse[$i]) {
        $resultReverse++;
    } else {
        break;
    }
}

$finalResult = max($result, $resultReverse);
echo $finalResult;