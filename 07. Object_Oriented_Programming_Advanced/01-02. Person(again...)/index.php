<?php
declare(strict_types=1);

require_once "Models\IPerson.php";
require_once "Models\Identifiable.php";
require_once "Models\Birthtable.php";
require_once "Models\Person.php";
require_once "Models\Citizen.php";

$name = readline();
$age = readline();
$id = readline();
$birthday = readline();

$citizen = new \chovek\Citizen($name, (int)$age, $id, $birthday);

echo $citizen;