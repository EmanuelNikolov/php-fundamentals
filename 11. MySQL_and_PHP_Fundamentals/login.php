<?php
require_once "app.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = <<<SQL
SELECT id, email, password 
FROM users 
WHERE username = :login OR email = :login
SQL;

    $stmt = $db->prepare($query);
    $stmt->bindValue(":login", $username);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $passwordHash = $userData['password'];

    if (!$userData || !password_verify($password, $passwordHash)) {
        header("Location: login.php");
        exit;
        throw new LoginException("Incorrect email/username or password");
    }

    $_SESSION['user_id'] = $userData['id'];
    header("Location: profile.php");
    exit;
}

//$app->loadTemplate("login_frontend");
include "frontend/login_frontend.php";