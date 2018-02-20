<?php
$array = explode(" ", trim(fgets(STDIN)));
$input = trim(fgets(STDIN));

while ($input != "print") {
    $commands = explode(" ", $input);
    switch ($commands[0]) {
        case "add":
            if ($commands[1] >= count($array)) {
                array_push($array, $commands[2]);
            } else {
                array_splice($array, $commands[1], 0, $commands[2]);
            }
            break;
        case "addMany":
            array_splice($array, $commands[1], 0, array_slice($commands, 2));
            break;
        case "contains":
            $needle = array_search($commands[1], $array);
            if ($needle === false) {
                echo -1 . "\n";
            } else {
                echo $needle . "\n";
            }
            break;
        case "remove":
            array_splice($array, $commands[1], 1);
            break;
        case "shift":
            $rotations = intval($commands[1]) % count($array);
            for ($r = 0; $r < $rotations; ++$r) {
                $element = array_shift($array);
                array_push($array, $element);
            }
            break;
        case "sumPairs":
            $result = array();
            for ($i = 0; $i < count($array); $i += 2) {
                $sum = $array[$i];
                if ($i + 1 < count($array)) {
                    $sum += $array[$i + 1];
                }
                array_push($result, $sum);
            }
            $array = $result;
            break;
    }
    $input = trim(fgets(STDIN));
}

echo "[" . implode(", ", $array) . "]";