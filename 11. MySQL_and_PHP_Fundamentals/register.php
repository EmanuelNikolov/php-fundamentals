<?php
require_once "app.php";

if (isset($_POST['submit'])) {
    $userService->register(
      $_POST['email'],
      $_POST['username'],
      new DateTime($_POST['birthDate']),
      $_POST['password'],
      $_POST['passwordConfirm']
    );

    header("Location: login.php");
    exit;
}

$templateService->render("register");