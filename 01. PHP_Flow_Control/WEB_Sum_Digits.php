<?php
if (isset($_GET['submit'])) {
    $number = explode(", ", $_GET['input']);
    foreach ($number as $value) {
        if (is_numeric($value)) {
            $digits = str_split($value);
            $sumDigits[] = array_sum($digits);
        } else {
            $sumDigits[] = "Cannot sum that";
        }
    }
//    echo var_dump($sumDigits, $digits);

}
include "WEB_Sum_Digits_Input.php";