<?php
declare(strict_types=1);

require_once "Animuls.php";

while (true) {
    $animalType = trim(fgets(STDIN));

    if ($animalType == "Beast!") {
        break;
    }

    $animalTokens = explode(" ", trim(fgets(STDIN)));
    $animalTokens[1] = intval($animalTokens[1]);

    try {
        $animal = new $animalType(...$animalTokens);
        echo $animal . PHP_EOL  ;
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}