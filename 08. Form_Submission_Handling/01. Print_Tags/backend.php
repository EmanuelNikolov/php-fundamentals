<?php
if (isset($_POST['submit'])) {
    $tags = $_POST['tags'];
    $tagsArr = explode(", ", $tags);
}

require_once "frontend.php";