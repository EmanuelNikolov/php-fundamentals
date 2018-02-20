<?php
$input = trim(fgets(STDIN));
$keyword = explode(", ", trim(fgets(STDIN)));
foreach ($keyword as $value) {
    $replacement = str_repeat("*", strlen($value));
    $input = str_replace($value, $replacement, $input);
}
echo $input;