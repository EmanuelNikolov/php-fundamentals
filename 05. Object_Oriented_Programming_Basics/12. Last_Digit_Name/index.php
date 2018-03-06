<?php
declare(strict_types=1);

require_once "Number.php";

$number = new Number(trim(fgets(STDIN)));

echo $number->digitInWords();