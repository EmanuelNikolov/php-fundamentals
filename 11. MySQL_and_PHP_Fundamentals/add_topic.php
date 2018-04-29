<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['submit'], $_GET['id'])) {
    $categoryId = $_GET['id'];
    $userService->addTopic($_POST['topic'], $categoryId);
    header("Location: category.php?id={$categoryId}");
    exit;
}

$templateService->render("add_topic");