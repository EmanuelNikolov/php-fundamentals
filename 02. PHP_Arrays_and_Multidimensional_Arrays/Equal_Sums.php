<?php
$numbers = explode(" ", trim(fgets(STDIN)));
$count = count($numbers);

for ($i = 0; $i < $count; ++$i) {
    $leftSum = array_sum(array_slice($numbers, 0, $i));
    $rightSum = array_sum(array_slice($numbers, ($i + 1), (($count - 1) - $i))); //consider end function

    if ($leftSum == $rightSum) {
        echo $i;
        $match = true;
    }
}
if (!$match) {
    echo 'no';
}
