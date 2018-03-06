<?php
declare(strict_types=1);

require_once "Person.php";
require_once "Family.php";

$family = new People();

$countMembers = trim(fgets(STDIN));

while ($countMembers > 0) {
    $member = new Person(...explode(" ", trim(fgets(STDIN))));
    $family->addMember($member);
    $countMembers--;
}

echo $family->getOldestPerson()->getName() . " " . $family->getOldestPerson()->getAge();