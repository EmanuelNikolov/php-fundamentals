<?php
$num = $argv[1];

if (is_numeric($num) == TRUE) {
    do {
        echo $num . " ";
        ++$num;
    } while ($num <= 10);
} else {
    echo "Wrong type of data";
}