<?php
require_once "app.php";

if (isset($_POST['submit'])) {
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

$templateService->render("login");