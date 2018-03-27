<?php


namespace CollectionApp\CollectionModels;


use CollectionApp\CollectionModels\Interfaces\Addable;

class AddCollection extends CollectionAbstract implements Addable
{

    public function add(string $element): int
    {
        array_push($this->collection, $element);

        return array_search($element, $this->collection);
    }
}