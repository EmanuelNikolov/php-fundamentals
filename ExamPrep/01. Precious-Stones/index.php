<?php
$rocks = explode(",", $_GET['rocks']);
$rocksArr = [];

foreach ($rocks as $rock) {
    $rocksArr[] = str_split($rock);
}

$result = array_unique(array_intersect($rocksArr[0], ...$rocksArr));
echo count($result);