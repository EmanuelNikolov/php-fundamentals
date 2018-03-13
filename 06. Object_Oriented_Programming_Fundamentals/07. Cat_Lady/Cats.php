<?php

abstract class Kot
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return get_class($this) . " " . $this->getName();
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Siamese extends Kot
{
    private $earSize;

    public function __construct(string $name, string $earSize)
    {
        parent::__construct($name);
        $this->earSize = $earSize;
    }

    public function getEarSize(): string
    {
        return $this->earSize;
    }

    public function __toString()
    {
        return parent::__toString() . " " . $this->getEarSize();
    }
}

class Cymric extends Kot
{
    private $furLength;

    public function __construct(string $name, string $furLength)
    {
        parent::__construct($name);
        $this->furLength = $furLength;
    }

    public function getFurLength(): string
    {
        return $this->furLength;
    }

    public function __toString()
    {
        return parent::__toString() . " " . $this->getFurLength(); //
    }
}

class StreetExtraordinaire extends Kot
{
    private $dbOfMeow;

    public function __construct(string $name, string $dbOfMeow)
    {
        parent::__construct($name);
        $this->dbOfMeow = $dbOfMeow;
    }

    public function getDbOfMeow(): string
    {
        return $this->dbOfMeow;
    }

    public function __toString()
    {
        return parent::__toString() . " " . $this->getDbOfMeow();
    }


}