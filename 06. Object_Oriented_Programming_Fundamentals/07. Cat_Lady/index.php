<?php
declare(strict_types=1);

require_once "Cats.php";

$cats = [];

while (true) {
    $input = trim(fgets(STDIN));

    if ($input == "End") {
        break;
    }

    $tokens = array_reverse(explode(" ", $input));
    $catBreed = array_pop($tokens);
    $tokens = array_reverse($tokens);
    $cats[$tokens[0]] = new $catBreed(...$tokens);
}

echo $cats[trim(fgets(STDIN))];
