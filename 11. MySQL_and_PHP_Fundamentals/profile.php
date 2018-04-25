<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['user_id'];

$data = $userService->getUser($id);

$templateService->render("profile", $data);