<?php
require_once "app.php";

$query = <<<SQL
SELECT username
FROM users
ORDER BY username ASC
SQL;
$stmt = $db->prepare($query);
$stmt->execute();
$usersData = $stmt->fetchAll(PDO::FETCH_COLUMN);

//$app->loadTemplate("index_frontend");
include "frontend/index_frontend.php";