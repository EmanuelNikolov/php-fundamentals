<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['admin_id'], $_POST['username'])) {
    header("Location: users.php");
    exit;
}

if (!isset($_SESSION['tempUsername'])) {
    $data = $userService->getUser(null, $_POST['username']);
    $_SESSION['tempUsername'] = $_POST['username'];
} else {
    $data = $userService->getUser(null, $_SESSION['tempUsername']);
}

if (isset($_POST['submit'])) {
    $userService->edit(
      $data,
      $_POST['email'],
      $_POST['username'],
      new DateTime($_POST['birthDate']),
      $_POST['password'],
      $_POST['passwordConfirm']
    );
    unset($_SESSION['tempUsername']);
    header("Location: users.php");
    exit;
}

$templateService->render("profile_edit", $data);