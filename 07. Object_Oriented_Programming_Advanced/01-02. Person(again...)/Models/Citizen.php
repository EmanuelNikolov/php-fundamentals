<?php

namespace chovek;


class Citizen extends Person implements Identifiable, Birthtable
{

    private $id;

    private $birthday;

    public function __construct(
      string $name,
      int $age,
      string $id,
      string $birthday
    ) {
        parent::__construct($name, $age);
        $this->setId($id);
        $this->setBirthday($birthday);
    }

    public function setBirthday(string $birthday)
    {
        $this->birthday = $birthday;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function __toString()
    {
        return parent::__toString()
          . PHP_EOL . $this->id
          . PHP_EOL . $this->birthday;
    }
}