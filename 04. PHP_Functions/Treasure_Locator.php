<?php
declare(strict_types=1);
$input = array_map("floatval", explode(", ", trim(fgets(STDIN))));
$locations = array(
    "Tuvalu" => array(1, 3, 1, 3),
    "Tokelau" => array(8, 9, 0, 1),
    "Tonga" => array(0, 2, 6, 8),
    "Samoa" => array(5, 7, 3, 6),
    "Cook" => array(4, 9, 7, 8)
);

for ($i = 0; $i < count($input); $i += 2) {
    echo inRange($input[$i], $input[$i + 1], $locations);
    echo PHP_EOL;
}

function inRange(float $a, float $b, array $locations): string {
    foreach ($locations as $key=>$value) {
        if ($a >= $value[0] && $a <= $value[1] && $b >= $value[2] && $b <= $value[3]) {
            return $key;
        }
    }
    return "On the bottom of the ocean";
}

/*V2: function location(float $a, float $b): string {
    if ($a >= 1 && $a <= 3 && $b >= 1 && $b <= 3) {
        return "Tuvalu";
    } elseif ($a >= 8 && $a <= 9 && $b >= 0 && $b <= 1) {
        return "Tokelau";
    } elseif ($a >= 0 && $a <= 2 && $b >= 6 && $b <= 8) {
        return "Tonga";
    } elseif ($a >= 5 && $a <= 7 && $b >= 3 && $b <= 6) {
        return "Samoa";
    } elseif ($a >= 4 && $a <= 9 && $b >= 7 && $b <= 8) {
        return "Cook";
    } else {
        return "On the bottom of the ocean";
    }
}*/