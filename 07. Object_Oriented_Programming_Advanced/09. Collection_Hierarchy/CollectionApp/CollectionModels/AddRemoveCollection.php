<?php


namespace CollectionApp\CollectionModels;


use CollectionApp\CollectionModels\Interfaces\Addable;
use CollectionApp\CollectionModels\Interfaces\Removable;

class AddRemoveCollection extends CollectionAbstract implements Addable, Removable
{

    public function add(string $element): int
    {
        array_unshift($this->collection, $element);

        return array_search($element, $this->collection);
    }

    public function remove(): string
    {
        return array_pop($this->collection);
    }
}