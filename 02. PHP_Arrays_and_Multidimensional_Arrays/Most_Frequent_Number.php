<?php
$input = explode(" ", trim(fgets(STDIN)));

$inputCount = array_count_values($input);
arsort($inputCount);
reset($inputCount);
echo key($inputCount);