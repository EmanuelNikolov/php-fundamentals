<?php
require_once "app.php";

if (!isset($_SESSION['user_id'], $_GET['id'])) {
    header("Location: login.php");
    exit;
}

$data = $userService->getTopics($_GET['id']);

$templateService->render("category", $data);