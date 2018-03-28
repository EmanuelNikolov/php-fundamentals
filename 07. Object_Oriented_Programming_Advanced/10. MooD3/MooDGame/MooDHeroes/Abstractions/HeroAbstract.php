<?php


namespace MooDGame\MooDHeroes\Abstractions;


use MooDGame\MooDHeroes\Interfaces\IHero;

abstract class HeroAbstract implements IHero
{

    protected const PLAYER_TYPES = ["good", "bad"];

    protected $username;

    protected $password;

    protected $level;

    protected $sPoints;

    protected $type;

    public function __construct(
      string $username,
      string $type,
      int $level
    ) {
        $this->setUsername($username);
        $this->setPassword();
        $this->setType($type);
        $this->setLevel($level);
    }

    public function setUsername(string $name): void
    {
        /*if (strlen($name) > 10 || !ctype_alpha($name)) {
            throw new \Exception("Invalid Username");
        }*/

        $this->username = $name;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setLevel(int $level): void
    {
        if (!is_numeric($level)) {
            throw new \Exception("Level not valid");
        }

        $this->level = $level;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setType(string $type): void
    {
        if (!in_array(strtolower($type), self::PLAYER_TYPES)) {
            throw new \Exception("Invalid player type");
        }

        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function __toString()
    {
        return "\"{$this->getUsername()}\" | \"{$this->getPassword()}\" -> {$this->getType()}" . PHP_EOL;
    }
}