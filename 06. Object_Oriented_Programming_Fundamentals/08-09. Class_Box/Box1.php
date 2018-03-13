<?php

class Box1
{
    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getLength(): float
    {
        return $this->length;
    }

    protected function setLength(float $length): void
    {
        $this->length = $this->isPositive($length);
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    protected function setWidth(float $width): void
    {
        $this->width = $this->isPositive($width);
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    protected function setHeight(float $height): void
    {
        $this->height = $this->isPositive($height);
    }

    protected function isPositive(float $number): float
    {
        if ($number <= 0) {
            throw new Exception("All values must be positive!");
        }

        return $number;
    }

    public function getVolume(): float
    {
        return $this->length * $this->width * $this->height;
    }

    public function getLSA(): float
    {
        return 2 * $this->length * $this->height + 2 * $this->width * $this->height;
    }

    public function getSurface(): float
    {
        return 2 * $this->length * $this->width + 2 * $this->length * $this->height + 2 * $this->width * $this->height;
    }

    public function __toString()
    {
        return "Surface Area - " . number_format($this->getSurface(), 2) . PHP_EOL
            . "Lateral Surface Area - " . number_format($this->getLSA(), 2) . PHP_EOL
            . "Volume - " . number_format($this->getVolume(), 2);
    }
}

try {
    $box = new Box1((float)trim(fgets(STDIN)), (float)trim(fgets(STDIN)), (float)trim(fgets(STDIN)));
    echo $box;
} catch (Exception $e) {
    echo $e->getMessage();
}