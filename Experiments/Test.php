<?php

interface calc
{
    public function getCalc(DateTimeInterface $writer);

}



class Test
{
    private $one;
    private $two;

    public function __construct($number1, $number2)
    {
        $this->one = $number1;
        $this->two = $number2;
    }

    public function getOne()
    {
        return $this->one;
    }

    public function getTwo()
    {
        return $this->two;
    }


}

class Answer extends Test
{
    private $three;

    public function __construct($number1, $number2, $number3)
    {
        parent::__construct($number1, $number2);
        $this->three = $number3;
    }

    public function getThree()
    {
        return $this->three;
    }
}

$test = new Test(1, 2);
$answer = new Answer(3, 4, 5);
$test->getOne();
echo $answer->getOne();