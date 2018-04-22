<?php
require_once "app.php";

if (isset($_POST['submit'])) {

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        throw new RegisterException("Invalid email");
    }
    $username = $_POST['username'];
    $birthDate = new DateTime($_POST['birthDate']);
    $birthDate = $birthDate->format('Y-m-d');
    if (!$birthDate) {
        throw new RegisterException("Invalid birth date");
    }
    if ($_POST['password'] !== $_POST['passwordConfirm']) {
        throw new RegisterException("Passwords do not match");
    }
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = <<<SQL
SELECT 1
FROM users
WHERE email = ? OR username = ?
SQL;
    $stmt = $db->prepare($query);
    $stmt->execute(
      [
        $email,
        $username,
      ]
    );
    if ($stmt->rowCount()) {
        header("Location: login.php");
        exit;
        throw new LoginException("Username or Email already exists");
    }

    $query = <<<SQL
INSERT INTO users (
email, 
username, 
birthday,
password
) VALUES (
?,
?,
?,
?
);
SQL;
    $stmt = $db->prepare($query);
    $stmt->execute(
      [
        $email,
        $username,
        $birthDate,
        $password,
      ]
    );

    header("Location: login.php");
    exit;
}

//$app->loadTemplate("register_frontend");
include "frontend/register_frontend.php";