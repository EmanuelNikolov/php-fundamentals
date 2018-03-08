<?php

class Trainer
{
    private static $lastId = 0;

    private $id;
    private $name;
    private $numBadges = 0;

    /**
     * @var Bot[]
     */
    private $bots = [];

    public function __construct(string $name)
    {
        $this->id = ++self::$lastId;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumBadges(): int
    {
        return $this->numBadges;
    }

    public function getBots(): array
    {
        return $this->bots;
    }

    public function addBot(string $name, string $element, int $hp): void
    {
        $this->bots[] = new Bot($name, $element, $hp);
    }

    public function damageBots(): void
    {
        foreach ($this->bots as $bot) {
            $bot->takeHp(10);

            if ($bot->getHp() <= 0) {
                unset($bot);
            }
        }

        $this->bots = array_values($this->bots);
    }

    public function checkBots(string $element): void
    {
        $result = [];

        foreach ($this->bots as $bot) {
            if ($bot->getElement() == $element) {
                $result[] = $element;
            }
        }

        if (empty($result)) {
            $this->damageBots();
        } else {
            ++$this->numBadges;
        }
    }

    public function countBots(): int
    {
        return count($this->bots);
    }
}