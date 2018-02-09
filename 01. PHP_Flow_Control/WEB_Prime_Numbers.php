<?php
if (isset($_GET['submit'])) {
    $numbers = range($_GET['start'], $_GET['end']);
}
include "WEB_Prime_Numbers_Input.php";