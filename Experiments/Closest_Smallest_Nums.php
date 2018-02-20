<?php
$input = explode(" ", trim(fgets(STDIN)));
$countInput = count($input);
$smallest = array();

for ($c = 1; $c < $countInput; ++$c) {
    if ($input[$c] < $input[$c - 1] && $input[$c] < $input[$c + 1]) {
        $smallest[] = $input[$c];
    }
}

echo implode(" ", $smallest) . "\n";
echo count($smallest);