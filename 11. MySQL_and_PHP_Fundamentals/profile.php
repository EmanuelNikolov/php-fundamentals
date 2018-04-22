<?php
require_once "app.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$query = <<<SQL
SELECT username, birthday
FROM users
WHERE id = ?
SQL;
$stmt = $db->prepare($query);
$stmt->execute(
  [
    $_SESSION['user_id']
  ]
);
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

$birthday = new DateTime($userData['birthday']);
$age = date('Y') - $birthday->format('Y');
$birthday->modify("+{$age} years");
$currentTime = new DateTime();
if ($birthday < $currentTime) {
    $birthday->modify("+1 year");
}
$daysToBirthday = $birthday->diff($currentTime)->days;

//$app->loadTemplate("profile_frontend");
include "frontend/profile_frontend.php";