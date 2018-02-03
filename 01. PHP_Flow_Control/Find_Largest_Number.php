<?php
$firstNum = (int)readline();
$secondNum = (int)readline();
$thirdNum = (int)readline();

$largestNum = max($firstNum, $secondNum, $thirdNum);
echo "The largest number is {$largestNum}\n";