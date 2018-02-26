<?php
$input = array_map("intval", explode(" ", trim(fgets(STDIN))));

$zeroArr = array_fill(0, count($input), $input[0]);

$firstArr = function (array $arr) use ($zeroArr) {
    if (count($arr) > 2) {
        $lastTwo = array();
        foreach ($arr as $num) {
            $lastTwo[] = $zeroArr[0] + $num;
        }
        $prevArr = $arr;
        $columnSum = array();
        for ($l = 0; $l < count($arr) - 3; ++$l) {
//            $columnSum = array();
            for ($i = 0; $i < count($arr); ++$i) {
                $columnSum[] = $lastTwo[$i] + $prevArr[$i];
                $prevArr[$i] = $lastTwo[$i];
                $lastTwo[$i] = $columnSum[$i];
            }
        }
        return $columnSum;
    }
    return $arr;
};
var_dump($firstArr($input));
