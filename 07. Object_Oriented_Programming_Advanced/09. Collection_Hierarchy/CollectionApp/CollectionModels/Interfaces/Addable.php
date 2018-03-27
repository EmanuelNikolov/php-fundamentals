<?php

namespace CollectionApp\CollectionModels\Interfaces;


interface Addable
{

    public function add(string $element): int;
}