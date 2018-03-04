<?php

class Poll
{
    const AGE_CRITERIA = 30;

    private $members = [];

    public function createPoll()
    {
        $membersCount = trim(fgets(STDIN));

        while ($membersCount > 0) {
            $memberInfo = explode(" ", trim(fgets(STDIN)));
            $member = new Person($memberInfo[0], (int)$memberInfo[1]);
            $members[] = $member;
            $membersCount--;
        }

        $membersSorted = array_filter($members, function ($member) {
            return $member->getAge() > self::AGE_CRITERIA;
        });

        usort($membersSorted, function ($member1, $member2) {
            return strncmp($member1->getName(), $member2->getName(), 1);
        });

        $this->members = $membersSorted;
    }

    public function showPoll()
    {
        foreach ($this->members as $member) {
            echo "{$member->getName()} - {$member->getAge()}" . PHP_EOL;
        }
    }
}