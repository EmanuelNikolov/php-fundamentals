<?php
include "database_minions.php";

$db->exec("INSERT INTO minions (name, town_id, age) VALUES ('Kevin', 1, 22)");