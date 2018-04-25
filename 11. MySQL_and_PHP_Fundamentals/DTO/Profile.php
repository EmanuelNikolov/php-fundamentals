<?php

namespace DTO;


class Profile
{

    private $id;

    private $username;

    private $email;

    private $birthday;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function getDaysToBirthday(): string
    {
        $birthday = new \DateTime($this->birthday);
        $age = date('Y') - $birthday->format('Y');
        $birthday->modify("+{$age} years");
        $currentTime = new \DateTime();
        if ($birthday < $currentTime) {
            $birthday->modify("+1 year");
        }

        return $birthday->diff($currentTime)->days;
    }
}