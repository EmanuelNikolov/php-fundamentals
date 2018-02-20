<?php
    $sequence = explode(" ", trim(fgets(STDIN)));
    $count = count($sequence);
$longest = 0;

for ($i = 0; $i < $count; ++$i) {
    $currentCount = 1;
    $current = $sequence[$i];
    for ($l = $i + 1; $l < $count; ++$l) {
        if ($sequence[$l] > $current) {
            $current = $sequence[$l];
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $longest) {
        $longest = $currentCount;
        $startIndex = $i;
    }
}
echo implode(" ", array_slice($sequence, $startIndex, $longest));