<?php

class Person2
{
    private $name;
    private $money;

    /**
     * @var Product2[]
     */
    private $bag = [];

    public function __construct(string $name, int $money)
    {
        $this->setName($name);
        $this->setMoney($money);
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception("Name cannot be empty");
        }

        $this->name = $name;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    protected function setMoney(int $money): void
    {
        if ($money < 0) {
            throw new Exception("Money cannot be negative");
        }

        $this->money = $money;
    }

    public function buy(Product2 $product)
    {
        $cost = $product->getCost();

        if ($cost > $this->money) {
            throw new Exception($this->getName() . " can't afford " . $product->getName());
        }

        $this->money -= $cost;
        $this->bag[] = $product;
        echo $this->name . " bought " . $product->getName() . PHP_EOL;
    }

    public function __toString()
    {
        if (empty($this->bag)) {
            return $this->name . " - Nothing bought";
        }

        $productsNames = [];

        foreach ($this->bag as $product) {
            $productsNames[] = $product->getName();
        }

        return $this->name . " - " . implode(", ", $productsNames);
    }
}