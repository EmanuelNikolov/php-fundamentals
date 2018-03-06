<?php
declare(strict_types=1);

require_once "DecimalNumber.php";

$number = new DecimalNumber(trim(fgets(STDIN)));

echo $number->reverseNumber();