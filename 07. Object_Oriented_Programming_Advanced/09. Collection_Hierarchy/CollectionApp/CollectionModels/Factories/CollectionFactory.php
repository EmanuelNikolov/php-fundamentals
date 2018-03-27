<?php


namespace CollectionApp\CollectionModels\Factories;


use CollectionApp\CollectionModels\AddCollection;
use CollectionApp\CollectionModels\AddRemoveCollection;
use CollectionApp\CollectionModels\MyList;

class CollectionFactory
{

    private $add;

    private $addRemove;

    private $myList;

    public function __construct()
    {
        $this->add = new AddCollection();
        $this->addRemove = new AddRemoveCollection();
        $this->myList = new MyList();
    }

    public function getAdd(): AddCollection
    {
        return $this->add;
    }

    public function getAddRemove(): AddRemoveCollection
    {
        return $this->addRemove;
    }

    public function getMyList(): MyList
    {
        return $this->myList;
    }
}