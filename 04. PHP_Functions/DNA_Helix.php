<?php
declare(strict_types=1);
define("DNA", "ATCGTTAGGG");
$input = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $input; ++$i) {
    switch ($i % 4) { // Looping with switch
        case 0:
            echo "**" . getLetter() . getLetter() . "**\n";
            break;
        case 1:
            echo "*" . getLetter() . "--" . getLetter() . "*\n";
            break;
        case 2:
            echo getLetter() . "----" . getLetter() . "\n";
            break;
        case 3:
            echo "*" . getLetter() . "--" . getLetter() . "*\n";
    }
}

function getLetter(): string {
    static $letter = 0;
    return DNA[$letter++ % strlen(DNA)];
}