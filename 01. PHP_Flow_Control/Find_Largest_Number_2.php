<?php
/*while (true) {
    $num = trim(readline());
    if (empty($num)) {
        break;
    }
    $number[] = (int)$num;
}

$largestNum = max($number);
echo "The largest number is {$largestNum}\n";*/

$largest = NULL;
while ($number = (int)readline()) {
    $largest = max($largest, $number);
}
echo "Largest number: " . $largest . "\n";