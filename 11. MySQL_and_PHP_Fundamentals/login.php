<?php
require_once "app.php";

if (isset($_POST['submit'])) {
    $userService = new UserService($db);
    $userService->login(
      $_POST['username'],
      $_POST['password']
    );

    if (!$userService) {
        header("Location: login.php");
        exit;
        throw new LoginException("Incorrect email/username or password");
    }

    header("Location: profile.php");
    exit;
}

//$app->loadTemplate("login_frontend");
include "frontend/login_frontend.php";