<?php
session_start();

if (isset($_POST['tags'])) {
    $_SESSION['successCount'] = $_SESSION['successCount'] ?? 0;

    $tag = trim($_POST['tags']);
    $tagTest = "<{$tag}>test</{$tag}>";

    $tidy = new tidy();
    $tidy->parseString($tagTest);

    if ((tidy_error_count($tidy) === 0) && !empty($tag)) {
        $validationResult = "Valid HTML Tag!";
        ++$_SESSION['successCount'];
    } else {
        $validationResult = "Invalid HTML Tag!";
    }

    /* Needs some work
    try {
        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->createElement($tag);
        $validationResult = "Valid HTML Tag!";
        ++$_SESSION['successCount'];
    } catch (Exception $e) {
        $validationResult = "Invalid HTML Tag!";
    }*/
}

if (isset($_POST['clear'])) {
    session_unset();
}

require_once "frontend.php";