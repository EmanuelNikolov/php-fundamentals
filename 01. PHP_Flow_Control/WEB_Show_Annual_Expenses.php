<?php
$month = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
);
if (isset($_GET['submit'])) {
    $numYears = $_GET['num'];
    $years = range(date('Y'), (date('Y') - $numYears));
}
include "WEB_Show_Annual_Expenses_Input.php";