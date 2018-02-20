<?php
$input = trim(fgets(STDIN));
$keyword = trim(fgets(STDIN));
preg_match_all('~[^.?!]*\b' . $keyword . '\b[^.?!]*[.?!]~', $input, $split);
foreach ($split[0] as $item) {
    echo trim($item) . "\n";
}