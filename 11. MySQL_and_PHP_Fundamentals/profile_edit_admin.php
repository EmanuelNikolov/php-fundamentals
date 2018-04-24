<?php
require_once "app.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}


$id = $_SESSION['user_id'];

$query = <<<SQL
SELECT username, email, birthday
FROM users
WHERE id = ?
SQL;
$stmt = $db->prepare($query);
$stmt->execute(
  [
    $id,
  ]
);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $userService = new UserService($db);
    $userService->edit(
      $id,
      $data,
      $_POST['email'],
      $_POST['username'],
      new DateTime($_POST['birthDate']),
      $_POST['password'],
      $_POST['passwordConfirm']
    );
    header("Location: profile.php");
    exit;
}

include "frontend/profile_edit_frontend.php";