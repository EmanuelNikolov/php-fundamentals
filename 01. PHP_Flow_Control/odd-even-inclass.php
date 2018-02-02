<?php
$num = 4.5;
$remainder = fmod($num, 2);

if ($remainder == 0) {
    echo "This number is even";
} elseif ($remainder == round($remainder)) {
    echo "This number is odd";
} else {
    echo "This number is invalid";
}
