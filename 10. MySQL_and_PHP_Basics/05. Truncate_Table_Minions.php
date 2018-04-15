<?php
include "database_minions.php";

$db->exec("UPDATE minions SET deleted_on = NOW()");