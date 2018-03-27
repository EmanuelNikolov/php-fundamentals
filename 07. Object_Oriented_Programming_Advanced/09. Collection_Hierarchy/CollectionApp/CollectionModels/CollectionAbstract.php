<?php


namespace CollectionApp\CollectionModels;


use CollectionApp\CollectionModels\Interfaces\ICollection;

abstract class CollectionAbstract implements ICollection
{

    protected $collection = [];

    public function getCollection(): array
    {
        return $this->collection;
    }
}