<?php
$alphabet = range('a', 'z');
$letters = strtolower(trim(fgets(STDIN)));
$count = strlen($letters);

for ($i = 0; $i < $count; ++$i) {
    foreach ($alphabet as $number=>$letter) {
        if ($letters[$i] == $letter) {
            echo "{$letters[$i]} -> {$number}\n";
        }
    }
}

/*for ($i = 0; $i < $count; ++$i) {
    $position = (ord($letters[$i]) - 97);
    echo "{$letters[$i]} -> {$position}\n";
}*/