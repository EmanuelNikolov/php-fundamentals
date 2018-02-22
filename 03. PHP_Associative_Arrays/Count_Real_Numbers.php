<?php
$input = explode(" ", trim(fgets(STDIN)));
$numbersSorted = array_count_values($input);
ksort($numbersSorted);
foreach ($numbersSorted as $key=>$value) {
    echo $key . " -> " . $value . " times\n";
}