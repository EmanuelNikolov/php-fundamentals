<?php
$input = explode(" ", trim(fgets(STDIN)));
$count = count($input);

 for ($p = 0; $p < $count; ++$p) {
     $length[$i] = 1;
     $previous[$i] = -1;
     for ($left = 0; $left < $p; ++$left) {
         if ($input[$p] > $input[$left]) {
             if ($length[$left] + 1 > $length[$p]) {
                 $previous[$p] = $left;
                 $length[$p] = $length[$left] + 1;
             }
         }
     }
 }
 $maximal = 0;
 $index = -1;