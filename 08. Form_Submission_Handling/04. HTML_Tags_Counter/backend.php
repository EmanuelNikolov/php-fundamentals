<?php
session_start();

if (isset($_POST['tags'])) {
    $_SESSION['successCount'] = $_SESSION['successCount'] ?? 0;

    $tag = $_POST['tags'];
    $tagTest = "<{$tag}></{$tag}>";

    $tidy = new tidy();
    $tidy->parseString($tagTest);
    if (tidy_error_count($tidy) === 0) {
        $validationResult = "Valid HTML Tag!";
        ++$_SESSION['successCount'];
    } else {
        $validationResult = "Invalid HTML Tag!";
    }
}

if (isset($_POST['clear'])) {
    session_unset();
}

require_once "frontend.php";