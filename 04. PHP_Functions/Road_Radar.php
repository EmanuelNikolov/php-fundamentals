<?php
declare(strict_types=1);
$speed = intval(trim(fgets(STDIN)));
$area = trim(fgets(STDIN));

$limit = getLimit($area);
$penalty = getPenalty($speed, $limit);
if ($penalty) {
    echo $penalty;
}

function getLimit(string $area): int {
    switch ($area) {
        case "residential":
            $limit = 20;
            break;
        case "city":
            $limit = 50;
            break;
        case "interstate":
            $limit = 90;
            break;
        case  "motorway":
            $limit = 130;
            break;
    }
    return $limit;
}
function getPenalty(int $speed, int $limit) {
    $overSpeed = $speed - $limit;
    if ($overSpeed >= 0) {
        if ($overSpeed <= 20)
            return "speeding";
        if ($overSpeed <= 40)
            return "excessive speeding";
        return "reckless driving";
    }
    return false;
}