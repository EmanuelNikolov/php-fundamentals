<?php

class People
{
    /**
     * @var Person[]
     */
    private $members = [];


    public function __construct()
    {
        while (true) {
            $membersInfo = explode(" ", trim(fgets(STDIN)));

            if ($membersInfo[0] == "END") {
                break;
            }

            $this->members[] = new Person(...$membersInfo);
        }

        usort($this->members, function ($obj1, $obj2) {
           return $obj1->getAge() <=> $obj2->getAge();
        });
    }

    public function __toString(): string
    {
        $result = [];

        foreach ($this->members as $member) {
            $result[] = "{$member->getName()} - age: {$member->getAge()}, occupation: {$member->getOccupation()}" . PHP_EOL;
        }

        return implode("", $result);
    }
}