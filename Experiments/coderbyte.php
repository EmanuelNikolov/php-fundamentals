<?php

function LetterChanges($str) {

  $vowels = ["a", "e", "i", "o", "u"];
  $strExp = str_split($str);

  foreach ($strExp as &$letter) {
      if (ctype_alpha($letter)) {
          $nextChar = ord($letter) + 1;
          $letter = chr($nextChar);

          if (in_array($letter, $vowels)) {
              $letter = strtoupper($letter);
          }
      }
  }

  $str = join($strExp);

  return $str;

}

echo LetterChanges("hello*3");
/*// keep this function call here
echo LetterChanges(fgets(fopen('php://stdin', 'r')));*/