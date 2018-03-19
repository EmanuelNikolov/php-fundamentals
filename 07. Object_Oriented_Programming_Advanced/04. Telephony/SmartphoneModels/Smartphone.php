<?php

namespace SmartphoneModels;

use SmartphoneModels\Browsable;
use SmartphoneModels\CallingInterface;

class Smartphone implements Browsable, CallingInterface
{

    public function startTest()
    {
        $this->processInput();
    }

    protected function processInput()
    {
        try {
            $numbersInput = explode(" ", trim(fgets(STDIN)));

            foreach ($numbersInput as $num) {
                echo $this->call($num);
            }

            $addressInput = explode(" ", trim(fgets(STDIN)));

            foreach ($addressInput as $address) {
                echo $this->browse($address);
            }
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    public function browse(string $URL): string
    {
        if (preg_match("~[\d]~", $URL)) {
            throw new \Exception("Invalid URL!");
        }

        return "Browsing: " . $URL . PHP_EOL;
    }

    public function call(string $phoneNumber): string
    {
        if (!preg_match("~^[\d]+$~", $phoneNumber)) {
            throw new \Exception("Invalid Number!");
        }

        return "Calling... " . $phoneNumber . PHP_EOL;
    }
}