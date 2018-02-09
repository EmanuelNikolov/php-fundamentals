<?php
if (isset($_GET['submit'])) {
    switch ($_GET['option']) {
        case "palindrome":
            $reverse = strrev($_GET['input']);
            if ($_GET['input'] == $reverse) {
                $output = $_GET['input'] . " is a palindrome.";
            } else {
                $output = $_GET['input'] . " is not a palindrome.";
            }
            break;
        case "reverse":
            $output = strrev($_GET['input']);
            break;
        case "split":
            $output = implode(' ', str_split($_GET['input']));
            break;
        case "hash":
            $output = crypt($_GET['input']);
            break;
        case "shuffle":
            $output = str_shuffle($_GET['input']);
            break;
    }
}
include "WEB_String_Modifier_Input.php";