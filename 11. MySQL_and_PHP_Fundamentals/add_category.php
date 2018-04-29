<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['submit'])) {
    $userService->addCategory($_POST['category']);
    header("Location: categories.php");
    exit;
}

$templateService->render("add_category");