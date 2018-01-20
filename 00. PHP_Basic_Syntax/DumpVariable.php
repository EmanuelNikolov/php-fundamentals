<?php
$test = array (
    $string = "hi",
    $int = 12,
    $float = 11.45,
    $array = array(1,2,3),
    $object = (object)[2, 4]
);

foreach ($test as $element) {
    if (is_numeric($element)) {
        echo var_dump($element) . "\n";

    } else {
        echo gettype($element) . "\n";
    }
}