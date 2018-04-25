<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}


$id = $_SESSION['user_id'];

$data = $userService->getUser($id);

if (isset($_POST['submit'])) {
    $userService->edit(
      $data,
      $_POST['email'],
      $_POST['username'],
      new DateTime($_POST['birthDate']),
      $_POST['password'],
      $_POST['passwordConfirm']
    );
    header("Location: profile.php");
    exit;
}

$templateService->render("profile_edit", $data);