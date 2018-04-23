<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userService = new UserService($db);

$id = $_SESSION['user_id'];

//$app->loadTemplate("profile_frontend");
include "frontend/profile_frontend.php";