<?php

class Store2
{
    /**
     * @var Person2[]
     */
    private $customers = [];

    /**
     * @var Product2[]
     */
    private $shelves = [];

    public function __construct()
    {
        $this->processInput();
        $this->processOrders();
    }

    protected function processOrders()
    {
        while (true) {
            $requests = trim(fgets(STDIN));

            if ($requests == "END") {
                break;
            }

            $requests = explode(" ", $requests);
            $customerName = $requests[0];
            $productName = $requests[1];

            try {
                if (array_key_exists($customerName, $this->customers) &&
                    array_key_exists($productName, $this->shelves)) {
                    $this->customers[$customerName]->buy($this->shelves[$productName]);
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }

    protected function processInput()
    {
        $customersData = array_filter(explode(";", trim(fgets(STDIN))));
        $shelvesData = array_filter(explode(";", trim(fgets(STDIN))));

        try {
            foreach ($customersData as $entry) {
                $tokens = explode("=", $entry);
                $customer = new Person2(...$tokens);
                $this->customers[$customer->getName()] = $customer;
            }

            foreach ($shelvesData as $entry) {
                $tokens = explode("=", $entry);
                $shelve = new Product2(...$tokens);
                $this->shelves[$shelve->getName()] = $shelve;
            }

        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    public function __toString()
    {
        return implode(PHP_EOL, $this->customers);
    }
}