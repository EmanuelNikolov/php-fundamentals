<?php
require_once "app.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['remove'])) {
    if (!isset($_POST['username'])) {
        header("Location: users.php");
        exit;
    }
    $username = $_POST['username'];
    $data = $userService->getUser(null, $username);
    if ($userService->getUsername($_SESSION['user_id']) === $username) {
        header("Location: users.php");
        exit;
    }
    if ($userService->remove($username)) {
        header("Location: profile_remove.php");
        exit;
    } else {
        header("Location: users.php");
        exit;
    }
}

$templateService->render("profile_remove");