<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userService = new UserService($db);

include "frontend/users_frontend.php";