<?php
require_once "app.php";

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$userService = new UserService($db);

//$app->loadTemplate("index_frontend");
include "frontend/index_frontend.php";