<?php
if (isset($_GET['filter'])) {
    switch ($_GET['op']) {
        case ",":
            $names = explode(",", $_GET["names"]);
            $ages = explode(",", $_GET["ages"]);
            break;
        case "|":
            $names = explode("|", $_GET["names"]);
            $ages = explode("|", $_GET["ages"]);
            break;
        case "&":
            $names = explode("&", $_GET["names"]);
            $ages = explode("&", $_GET["ages"]);
            break;
    }
}
include 'WEB_Student_Info.php';