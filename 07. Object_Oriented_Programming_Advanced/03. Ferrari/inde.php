<?php
declare(strict_types=1);

require_once "Drivable.php";
require_once "Ferrari.php";

$car = new \CvqtCherven\Ferrari(trim(fgets(STDIN)));

echo $car;