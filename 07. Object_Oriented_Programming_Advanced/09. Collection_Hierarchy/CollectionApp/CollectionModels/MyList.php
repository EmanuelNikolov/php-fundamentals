<?php


namespace CollectionApp\CollectionModels;


use CollectionApp\CollectionModels\Interfaces\Addable;
use CollectionApp\CollectionModels\Interfaces\IUsed;
use CollectionApp\CollectionModels\Interfaces\Removable;

class MyList extends CollectionAbstract implements Addable, Removable, IUsed
{

    public function add(string $element): int
    {
        array_unshift($this->collection, $element);

        return array_search($element, $this->collection);
    }

    public function getUsed(): int
    {
        return count($this->collection);
    }

    public function remove(): string
    {
        return array_shift($this->collection);
    }
}