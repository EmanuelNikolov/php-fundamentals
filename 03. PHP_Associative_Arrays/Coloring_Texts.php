<?php
$text = str_split(trim(fgets(STDIN)));
$textFiltered = array_filter($text, 'trim');
foreach ($textFiltered as $value) {
    if (ord($value) % 2 == 0) {
        echo "<font color='red'>" . $value . "</font>";
    } else {
        echo "<font color='blue'>" . $value . "</font>";
    }
}