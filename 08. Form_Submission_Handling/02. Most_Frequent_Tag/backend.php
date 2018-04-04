<?php
session_start();

if (isset($_POST['submit'])) {
    if (!isset($_SESSION['allTags'])) {
        $_SESSION['allTags'] = [];
    }

    $currentTags = explode(", ", $_POST['tags']);

    $_SESSION['allTags'] = array_merge($_SESSION['allTags'], $currentTags);

    //Sort array
    $allTagsSorted = array_count_values($_SESSION['allTags']);
    arsort($allTagsSorted);

    //Get most repeated element
    reset($allTagsSorted);
    $mostFrequentTag = key($allTagsSorted);
}

if (isset($_POST['clear'])) {
    session_unset();
}

require_once "frontend.php";