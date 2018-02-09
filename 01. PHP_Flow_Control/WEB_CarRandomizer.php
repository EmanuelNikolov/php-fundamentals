<?php
if (isset($_GET['submit'])) {
    $cars = explode(", ", $_GET['cars']);
    $color = array(
        "yellow",
        "blue",
        "red",
        "green",
        "white"
    );
}
include 'WEB_CarRandomizer_Input.php';