<?php

class Family
{
    /**
     * @var Person[]
     */
    private $members = [];

    public function addMember(Person $member): void
    {
        $this->members[] = $member;
    }

    public function getOldestPerson(): Person
    {
        usort($this->members, function ($obj1, $obj2) {
            return $obj2->getAge() <=> $obj1->getAge();
        });

        return $this->members[0];
    }
}