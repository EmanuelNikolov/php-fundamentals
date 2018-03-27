<?php


namespace CollectionApp;


use CollectionApp\CollectionModels\Factories\CollectionFactory;

class App
{

    private $collection = [];

    private $removeCount = 0;

    private $addResult = [];

    private $addRemoveResultAdd = [];

    private $myListResultAdd = [];

    private $addRemoveResultRemove = [];

    private $myListResultRemove = [];

    public function start()
    {
        $this->processInput();
        $this->sortData();
        echo $this;
    }

    private function processInput(): void
    {
        $this->collection = explode(" ", trim(fgets(STDIN)));
        $this->removeCount = (int)trim(fgets(STDIN));
    }

    private function sortData(): void
    {
        $factory = new CollectionFactory();

        foreach ($this->collection as $element) {
            $this->addResult[] = $factory->getAdd()
              ->add($element);
            $this->addRemoveResultAdd[] = $factory->getAddRemove()
              ->add($element);
            $this->myListResultAdd[] = $factory->getMyList()
              ->add($element);
        }

        while ($this->removeCount--) {
            $this->addRemoveResultRemove[] = $factory->getAddRemove()->remove();
            $this->myListResultRemove[] = $factory->getMyList()->remove();
        }
    }

    public function __toString()
    {
        return implode(" ", $this->addResult) . PHP_EOL
          . implode(" ", $this->addRemoveResultAdd) . PHP_EOL
          . implode(" ", $this->myListResultAdd) . PHP_EOL
          . implode(" ", $this->addRemoveResultRemove) . PHP_EOL
          . implode(" ", $this->myListResultRemove);
    }
}