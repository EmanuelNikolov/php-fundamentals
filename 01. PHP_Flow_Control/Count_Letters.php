<?php
$word = readline();

$letters = str_split($word);
$lettersCount = array_count_values($letters);
arsort($lettersCount);
foreach ($lettersCount as $letter => $count) {
    echo "$letter -> $count\n";
}
//foreach ($letters as $key => $letter) {
//    if (!array_key_exists($letter, $letters)) {
//        $letters[$letter] = 0;
//    }
//    $letters[$letter]++;
//}
//foreach ($letters as $letter => $key) {
//    echo "$letter -> $key\n";
//}
//echo var_dump($letters);