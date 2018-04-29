<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$data = $userService->getCategories();

$templateService->render("categories", $data);