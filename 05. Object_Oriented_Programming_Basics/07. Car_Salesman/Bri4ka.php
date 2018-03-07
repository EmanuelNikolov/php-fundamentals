<?php

class Bri4ka
{
    const DEFAULT_VALUE = "n/a";

    private $model;

    /**
     * @var Mikser
     */
    private $engine;
    private $weight;
    private $color;

    public function __construct(
                                string $model,
                                Mikser $engine,
                                $weight = self::DEFAULT_VALUE,
                                string $color = self::DEFAULT_VALUE
    ) {
        $this->model = $model;
        $this->engine = $engine;

        if (!is_numeric($weight) && $weight != self::DEFAULT_VALUE) {
            $this->color = $weight;
            $this->weight = self::DEFAULT_VALUE;
        } else {
            $this->weight = $weight;
            $this->color = $color;
        }
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): Mikser
    {
        return $this->engine;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}