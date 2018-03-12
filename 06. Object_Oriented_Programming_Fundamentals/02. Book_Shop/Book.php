<?php

class Book
{
    private $title;
    private $author;
    private $price;

    public function __construct(string $author, string $title, int $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    protected function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }

        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    protected function setAuthor(string $author): void
    {
        if (preg_match("~\s\d~", $author)) {
            throw new Exception("Author not valid!");
        }

        $this->author = $author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    protected function setPrice(int $price): void
    {
        if ($price <= 0) {
            throw new Exception("Price not valid!");
        }

        $this->price = $price;
    }

    public function __toString()
    {
        return "OK" . PHP_EOL . (string)$this->getPrice();
    }
}

class GoldenEditionBook extends Book
{
    protected function setPrice(int $price): void
    {
        $price *= 1.3;
        parent::setPrice($price);
    }
}