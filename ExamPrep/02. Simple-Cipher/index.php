<?php
$_GET['string'] = "zzz-ZZZ";
$_GET['key'] = 2;

$string = $_GET['string'];
$key = intval($_GET['key']);
$lowerCase = range('a', 'z');
$upperCase = range('A', 'Z');
$newString = "";

for ($i = 0; $i < strlen($string); ++$i) {
    if (!ctype_alpha($string[$i])) {
        $newString .= $string[$i];
        continue;
    }

    if (ctype_upper($string[$i])) {
        $calculation = (array_search($string[$i], $upperCase) + $key) % 26;
        $result = $upperCase[$calculation];
    } else {
        $calculation = (array_search($string[$i], $lowerCase) + $key) % 26;
        $result = $lowerCase[$calculation];
    }

    $newString .= $result;
}

echo $newString;